/* all için bu kısım kullanabilirim
import * as bootstrap from 'bootstrap';
window.bootstrap = bootstrap;
*/
//import Alert from 'bootstrap/js/dist/alert';
//import Button from 'bootstrap/js/dist/button';
import Carousel from 'bootstrap/js/dist/carousel';
import Collapse from 'bootstrap/js/dist/collapse';
import Dropdown from 'bootstrap/js/dist/dropdown';
import Modal from 'bootstrap/js/dist/modal';
//import Offcanvas from 'bootstrap/js/dist/offcanvas';
//import Popover from 'bootstrap/js/dist/popover';
//import ScrollSpy from 'bootstrap/js/dist/scrollspy';
//import Tab from 'bootstrap/js/dist/tab';
//import Toast from 'bootstrap/js/dist/toast';
//import Tooltip from 'bootstrap/js/dist/tooltip';

// global erişim gerekiyorsa
window.bootstrap = {
  Carousel,
  Collapse,
  Dropdown,
  Modal,
  //Tab
};

import ScrollReveal from 'scrollreveal';
document.addEventListener('DOMContentLoaded', function () {

  /* Scroll Reveal */
  const sr = ScrollReveal({
    duration: 1000,
    origin: 'top',
    distance: '50px',
    easing: 'ease-in-out',
    reset: false
  });

  sr.reveal('.scroll-reveal');
  sr.reveal('.scroll-reveal-bottom', { origin: 'bottom', distance: '100px' });
  sr.reveal('.scroll-reveal-left', { origin: 'left' });
  sr.reveal('.scroll-reveal-left-step-1', { origin: 'left', distance: '100px' });
  sr.reveal('.scroll-reveal-left-step-2', { origin: 'left', distance: '150px' });
  sr.reveal('.scroll-reveal-right', { origin: 'right' });
  sr.reveal('.scroll-reveal-top', { origin: 'top' });

  /* Navbar Scroll */
  const navbar = document.querySelector('header');
  const footer = document.getElementById("footer");
  const scrollToTop = document.getElementById("scroll-to-top");

  function handleScroll() {
    if (navbar) {
      if (window.scrollY > 50) {
        navbar.classList.add('fixed-top');
      } else {
        navbar.classList.remove('fixed-top');
      }
    }

    if (footer && scrollToTop) {
      const footerPosition = footer.getBoundingClientRect();
      const windowHeight = window.innerHeight;

      if (footerPosition.top < windowHeight) {
        scrollToTop.classList.remove("d-none");
      } else {
        scrollToTop.classList.add("d-none");
      }
    }
  }

  handleScroll(); // Initial check
  window.addEventListener('scroll', handleScroll);
  /* Navbar Scroll - End */
});

// Header Scroll Değişen Logo
document.addEventListener("DOMContentLoaded", function () {
  const header = document.querySelector("header");
  if (!header) return;

  const logo = header.querySelector(".navbar-brand img");
  const originalSrc = logo?.getAttribute("src");
  const scrolledSrc = logo?.dataset?.scrolledimage;

  function updateLogo() {
    if (window.scrollY > 20) {
      if (!header.classList.contains("fixed-top")) {
        header.classList.add("fixed-top");
        if (logo && originalSrc && scrolledSrc) {
          logo.src = scrolledSrc;
        }
      } else {
        if (logo && originalSrc && scrolledSrc) {
          logo.src = scrolledSrc;
        }
      }
    } else {
      if (!header.classList.contains("fixed-top")) {
        header.classList.remove("fixed-top");
        if (logo && originalSrc && scrolledSrc) {
          logo.src = originalSrc;
        }
      }
    }
  }

  window.addEventListener("scroll", function () {
    updateLogo();
  });
});

//Counter Animation
const startCounter = (obj, start, end, duration) => {
  let startTimestamp = null;
  const step = (timestamp) => {
    if (!startTimestamp) startTimestamp = timestamp;
    const progress = Math.min((timestamp - startTimestamp) / duration, 1);
    obj.innerHTML = Math.floor(progress * (end - start) + start);
    if (progress < 1) {
      window.requestAnimationFrame(step);
    }
  };
  window.requestAnimationFrame(step);
};
const counterObserver = new IntersectionObserver((entries, observer) => {
  entries.forEach(entry => {
    if (entry.isIntersecting) {
      const el = entry.target;
      const targetValue = parseInt(el.dataset.value);
      if (!isNaN(targetValue)) {
        startCounter(el, 0, targetValue, 2000);
      }
      observer.unobserve(el);
    }
  });
}, { threshold: 0.5 });
document.querySelectorAll('.countup').forEach(el => {
  counterObserver.observe(el);
});

//Dropdown açılır menu 
document.addEventListener("DOMContentLoaded", function () {
  const dropdowns = document.querySelectorAll(".custom-dropdown-menu");
  const subDropdowns = document.querySelectorAll(".dropdown-submenu");

  // --- YARDIMCI FONKSİYON: Diğer her şeyi kapatır ---
  const closeAllMenus = (except = null) => {
    dropdowns.forEach((dropdown) => {
      if (dropdown !== except) {
        const toggle = dropdown.querySelector(".dropdown-toggle");
        const menu = dropdown.querySelector(".dropdown-menu");
        toggle.classList.remove("show");
        menu.classList.remove("show");
        // Mobil tıklama durumunu sıfırla
        dropdown.dataset.clickedOnce = "false";
      }
    });
  };

  const closeAllSubMenus = (parent, except = null) => {
    const subs = parent.querySelectorAll(".dropdown-submenu");
    subs.forEach((sub) => {
      if (sub !== except) {
        sub.querySelector(".dropdown-toggle").classList.remove("show");
        sub.querySelector(".dropdown-menu").classList.remove("show");
      }
    });
  };

  // ANA DROPDOWNLAR
  dropdowns.forEach(function (dropdown) {
    const toggle = dropdown.querySelector(".dropdown-toggle");
    const menu = dropdown.querySelector(".dropdown-menu");
    let closeTimeout = null;

    const openMenu = () => {
      clearTimeout(closeTimeout);
      closeAllMenus(dropdown); // 👈 Yeni açılan hariç diğerlerini kapat
      toggle.classList.add("show");
      menu.classList.add("show");
    };

    const closeMenu = () => {
      closeTimeout = setTimeout(() => {
        toggle.classList.remove("show");
        menu.classList.remove("show");
        dropdown.dataset.clickedOnce = "false";
      }, 400);
    };

    // DESKTOP HOVER
    dropdown.addEventListener("mouseenter", () => {
      if (window.innerWidth >= 1200) openMenu();
    });

    dropdown.addEventListener("mouseleave", () => {
      if (window.innerWidth >= 1200) closeMenu();
    });

    menu.addEventListener("mouseenter", () => {
      if (window.innerWidth >= 1200) clearTimeout(closeTimeout);
    });

    menu.addEventListener("mouseleave", () => {
      if (window.innerWidth >= 1200) closeMenu();
    });

    // CLICK (MOBİL VE DESKTOP LİNK)
    toggle.addEventListener("click", function (e) {
      if (window.innerWidth >= 1200) {
        window.location.href = toggle.getAttribute("href");
      } else {
        e.preventDefault();
        // Eğer zaten açıksa linke git, kapalıysa aç
        if (dropdown.dataset.clickedOnce === "true") {
          window.location.href = toggle.getAttribute("href");
        } else {
          openMenu();
          dropdown.dataset.clickedOnce = "true";
        }
      }
    });
  });

  // ALT MENÜLER (SUBMENU)
  subDropdowns.forEach(function (subDropdown) {
    const subToggle = subDropdown.querySelector(".dropdown-toggle");
    const subMenu = subDropdown.querySelector(".dropdown-menu");
    const parentMenu = subDropdown.closest(".dropdown-menu");

    subToggle.addEventListener("click", function (e) {
      if (window.innerWidth < 1200) {
        e.preventDefault();
        e.stopPropagation(); // Üst menünün kapanmasını engelle

        // Aynı seviyedeki diğer alt menüleri kapat
        closeAllSubMenus(parentMenu, subDropdown);

        subToggle.classList.toggle("show");
        subMenu.classList.toggle("show");
      }
    });

    // Desktop hover için alt menü desteği
    if (window.innerWidth >= 1200) {
      subDropdown.addEventListener("mouseenter", () => {
        closeAllSubMenus(parentMenu, subDropdown);
        subToggle.classList.add("show");
        subMenu.classList.add("show");
      });
    }
  });

  // Dışarıya tıklandığında her şeyi kapat (Opsiyonel ama önerilir)
  document.addEventListener("click", (e) => {
    if (!e.target.closest(".custom-dropdown-menu")) {
      closeAllMenus();
    }
  });
});

import EmblaCarousel from 'embla-carousel';
import Autoplay from 'embla-carousel-autoplay';

// Product Carousel
document.addEventListener('DOMContentLoaded', () => {
  const viewport = document.querySelector('#productCarousel .embla__viewport');
  if (!viewport) return;

  const embla = EmblaCarousel(
    viewport,
    {
      loop: false,
      align: 'start',
      slidesToScroll: 1,
    },
    [
      Autoplay({
        delay: 5000,
        stopOnMouseEnter: true,
        stopOnInteraction: false,
        playOnMouseLeave: true
      })
    ]
  );

  document.querySelector('.next-btn')?.addEventListener('click', () => embla.scrollNext());
  document.querySelector('.prev-btn')?.addEventListener('click', () => embla.scrollPrev());
});

import { animate, stagger } from 'animejs';

document.querySelectorAll('.animation-text').forEach(title => {

  // text split
  title.innerHTML = title.textContent
    .split('')
    .map(char => `<span>${char}</span>`)
    .join('');

  const spans = title.querySelectorAll('span');

  function animateIn() {
    animate(spans, {
      opacity: 1,
      translateY: 0,
      duration: 700,
      delay: stagger(40),
      easing: 'easeOutExpo'
    });
  }

  function animateOut() {
    animate(spans, {
      opacity: 0,
      translateY: 40,
      duration: 400,
      delay: stagger(20),
      easing: 'easeInExpo'
    });
  }

  const observer = new IntersectionObserver(
    ([entry]) => {
      if (entry.isIntersecting) {
        animateIn();
      } else {
        animateOut();
      }
    },
    {
      threshold: 0.6
    }
  );

  observer.observe(title);
});

document.querySelectorAll('.reveal-section').forEach(section => {

  function show() {
    animate(section, {
      opacity: 1,
      translateY: 0,
      duration: 600,
      easing: 'easeOutCubic'
    });
  }

  function hide() {
    animate(section, {
      opacity: 0,
      translateY: 40,
      duration: 500,
      easing: 'easeInCubic'
    });
  }

  const observer = new IntersectionObserver(
    ([entry]) => {
      if (entry.isIntersecting) {
        show();
      } else {
        hide();
      }
    },
    {
      threshold: 0.2
    }
  );

  observer.observe(section);
});

const clamp = (v, min = 0, max = 1) => Math.min(max, Math.max(min, v));

document.querySelectorAll('.reveal-3d').forEach(el => {
  function update() {
    const rect = el.getBoundingClientRect();
    const vh = window.innerHeight;

    // ÖNEMLİ DEĞİŞİKLİK: 
    // progress 0 (alt sınır) ile vh * 0.7 (ekranın üst %30'u) arasında çalışır.
    // Böylece öğe ekranın ortasını geçtiği an tam netleşir.
    const startTrigger = vh; // Alttan girdiği an
    const endTrigger = vh * 0.3; // Ekranın üstünden 30% mesafe kaldığı an 1.0 olur

    const progress = clamp(
      (startTrigger - rect.top) / (startTrigger - endTrigger)
    );

    animate(el, {
      opacity: progress,
      // scale: 0.8'den 1'e gelsin (Daha belirgin bir yaklaşma efekti)
      scale: 0.8 + progress * 0.2,
      // translateY: 100'den 0'a
      translateY: 100 * (1 - progress),
      // translateZ: -500'den 0'a (Gerçekten arkadan gelme hissi)
      translateZ: [-500 * (1 - progress), 0],
      rotateX: 15 * (1 - progress),
      duration: 0,
      easing: 'linear'
    });
  }

  // İlk yükleme için
  update();

  let ticking = false;
  window.addEventListener('scroll', () => {
    if (!ticking) {
      requestAnimationFrame(() => {
        update();
        ticking = false;
      });
      ticking = true;
    }
  }, { passive: true });
});

document.addEventListener("DOMContentLoaded", function () {
  const mainCarousel = document.querySelector("#carouselProjects");
  const modalCarouselInner = document.querySelector("#modalCarousel .carousel-inner");
  const zoomModalElement = document.getElementById("imageZoomModal");
  const bootstrapZoomModal = new bootstrap.Modal(zoomModalElement);
  let modalCarouselInstance = null;

  const mainImages = mainCarousel.querySelectorAll(".carousel-item img");
  modalCarouselInner.innerHTML = ""; // İçini temizle

  mainImages.forEach((img, index) => {
    const activeClass = index === 0 ? "active" : "";
    modalCarouselInner.innerHTML += `
            <div class="carousel-item ${activeClass}">
                <img src="${img.src}" class="d-block mx-auto img-fluid" style="max-height: 90vh; object-fit: contain;" alt="${img.alt}">
            </div>
        `;
  });

  document.addEventListener("click", function (e) {
    const trigger = e.target.closest(".zoom-trigger");
    if (!trigger) return;

    e.preventDefault();

    const parentItem = trigger.closest(".carousel-item");
    const allItems = Array.from(parentItem.parentElement.children);
    const clickedIndex = allItems.indexOf(parentItem);

    // Modal Carousel'i başlat ve ilgili index'e git
    if (!modalCarouselInstance) {
      modalCarouselInstance = new bootstrap.Carousel(document.getElementById('modalCarousel'));
    }

    modalCarouselInstance.to(clickedIndex);
    bootstrapZoomModal.show();
  });
});