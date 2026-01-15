class SmartCarousel {
  constructor(elementId, options = {}) {
    this.container = document.getElementById(elementId);
    if (!this.container) return;

    this.carousel = new bootstrap.Carousel(this.container, {
      interval: false, // Otomatik geçişi Bootstrap değil biz yöneteceğiz
      pause: false,
      keyboard: true,
      ...options
    });

    this.timer = null;
    this.startTime = null;
    this.duration = 0;
    this.init();
  }

  init() {
    // İlk slide için başlat
    this.playSlide();

    // Slide değişim bittiğinde (Yeni slide geldiğinde)
    this.container.addEventListener("slid.bs.carousel", () => this.playSlide());

    // Slide değişim başladığında (Temizlik)
    this.container.addEventListener("slide.bs.carousel", () => {
      clearTimeout(this.timer);
      this.stopAllVideos();
      this.emitEvent('carousel:stop'); // İlerleme çubuğunu durdurmak için
    });
  }

  playSlide() {
    const activeItem = this.container.querySelector(".carousel-item.active");
    if (!activeItem) return;

    const type = activeItem.getAttribute("data-type");
    const video = activeItem.querySelector("video");

    if (type === "video" && video) {
      if (video.readyState < 2) {
        video.onloadedmetadata = () => this.handleVideo(video);
      } else {
        this.handleVideo(video);
      }
    } else {
      this.handleImage(activeItem);
    }
  }

  handleVideo(video) {
    const duration = video.duration * 1000;
    this.emitEvent('carousel:start', { duration });

    video.currentTime = 0;
    video.play().catch(err => {
      console.warn("Otomatik oynatma engellendi, 4sn sonra geçiliyor.");
      this.setFallbackTimer(4000);
    });

    video.onended = () => this.carousel.next();
  }

  handleImage(item) {
    let duration = parseInt(item.getAttribute("data-interval")) || 5000;
    this.emitEvent('carousel:start', { duration });

    this.timer = setTimeout(() => {
      this.carousel.next();
    }, duration);
  }

  stopAllVideos() {
    const videos = this.container.querySelectorAll("video");
    videos.forEach(v => {
      v.pause();
      v.onended = null;
    });
  }

  setFallbackTimer(ms) {
    this.timer = setTimeout(() => this.carousel.next(), ms);
  }

  emitEvent(name, detail = {}) {
    const event = new CustomEvent(name, { detail });
    this.container.dispatchEvent(event);
  }
}