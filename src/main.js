/* all için bu kısım kullanabilirim
import * as bootstrap from 'bootstrap';
window.bootstrap = bootstrap;
*/
//import Alert from 'bootstrap/js/dist/alert';
//import Button from 'bootstrap/js/dist/button';
import Carousel from 'bootstrap/js/dist/carousel';
import Collapse from 'bootstrap/js/dist/collapse';
import Dropdown from 'bootstrap/js/dist/dropdown';
//import Modal from 'bootstrap/js/dist/modal';
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
  //Modal,
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

  window.addEventListener("scroll", function () {
    if (window.scrollY > 20) {
      if (!header.classList.contains("fixed-top")) {
        header.classList.add("fixed-top");
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

//Dropdown açılır menü
document.addEventListener("DOMContentLoaded", function () {
  const dropdowns = document.querySelectorAll(".custom-dropdown-menu");

  dropdowns.forEach(function (dropdown) {
    const toggle = dropdown.querySelector(".dropdown-toggle");
    const menu = dropdown.querySelector(".dropdown-menu");

    let clickedOnce = false;
    let closeTimeout = null;

    const openMenu = () => {
      clearTimeout(closeTimeout);
      toggle.classList.add("show");
      menu.classList.add("show");
    };

    const closeMenu = () => {
      closeTimeout = setTimeout(() => {
        toggle.classList.remove("show");
        menu.classList.remove("show");
        clickedOnce = false;
      }, 400); // 👈 300–500ms ideal
    };

    // DESKTOP
    dropdown.addEventListener("mouseenter", () => {
      if (window.innerWidth >= 1200) openMenu();
    });

    dropdown.addEventListener("mouseleave", () => {
      if (window.innerWidth >= 1200) closeMenu();
    });

    // MENU ÜZERİNE GELİNCE KAPANMASIN
    menu.addEventListener("mouseenter", () => {
      if (window.innerWidth >= 1200) clearTimeout(closeTimeout);
    });

    menu.addEventListener("mouseleave", () => {
      if (window.innerWidth >= 1200) closeMenu();
    });

    // CLICK DAVRANIŞI
    toggle.addEventListener("click", function (e) {
      e.preventDefault();

      if (window.innerWidth >= 1200) {
        window.location.href = toggle.getAttribute("href");
      } else {
        if (!clickedOnce) {
          openMenu();
          clickedOnce = true;
        } else {
          window.location.href = toggle.getAttribute("href");
        }
      }
    });
  });

  // SUBMENU
  const subDropdowns = document.querySelectorAll(".dropdown-submenu");

  subDropdowns.forEach(function (subDropdown) {
    const subToggle = subDropdown.querySelector(".dropdown-toggle");
    const subMenu = subDropdown.querySelector(".dropdown-menu");

    let closeTimeout = null;

    const openSub = () => {
      clearTimeout(closeTimeout);
      subToggle.classList.add("show");
      subMenu.classList.add("show");
    };

    const closeSub = () => {
      closeTimeout = setTimeout(() => {
        subToggle.classList.remove("show");
        subMenu.classList.remove("show");
      }, 400);
    };

    if (window.innerWidth >= 1200) {
      subDropdown.addEventListener("mouseenter", openSub);
      subDropdown.addEventListener("mouseleave", closeSub);

      subMenu.addEventListener("mouseenter", () => clearTimeout(closeTimeout));
      subMenu.addEventListener("mouseleave", closeSub);
    }

    subToggle.addEventListener("click", function (e) {
      if (window.innerWidth < 1200) {
        e.preventDefault();
        subToggle.classList.toggle("show");
        subMenu.classList.toggle("show");
      }
    });
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
      loop: true,
      align: 'start',
      slidesToScroll: 1,
    },
    [
      Autoplay({
        delay: 3000,
        stopOnMouseEnter: true,
        stopOnInteraction: false,
        playOnMouseLeave: true
      })
    ]
  );

  document.querySelector('.next-btn')?.addEventListener('click', () => embla.scrollNext());
  document.querySelector('.prev-btn')?.addEventListener('click', () => embla.scrollPrev());
});

// Product Detail Carousel
document.addEventListener('DOMContentLoaded', () => {
  const viewportProductDetail = document.querySelector('#productDetailCarousel .embla__viewport');
  if (!viewportProductDetail) return;

  const emblaProductDetail = EmblaCarousel(
    viewportProductDetail,
    {
      loop: true,
      align: 'start',
      slidesToScroll: 1,
    },
    [
      Autoplay({
        delay: 3000,
        stopOnMouseEnter: true,
        stopOnInteraction: false,
        playOnMouseLeave: true
      })
    ]
  );

  document.querySelector('.next-btn-pd')?.addEventListener('click', () => emblaProductDetail.scrollNext());
  document.querySelector('.prev-btn-pd')?.addEventListener('click', () => emblaProductDetail.scrollPrev());
});

// Partner Carousel
document.addEventListener('DOMContentLoaded', () => {
  const viewportPartners = document.querySelector('#partnerCarousel .embla__viewport');
  if (!viewportPartners) return;

  const emblaPartners = EmblaCarousel(
    viewportPartners,
    {
      loop: true,
      align: 'start',
      slidesToScroll: 1,
      slidesToShow: 4,
    },
    [
      Autoplay({
        delay: 3000,
        stopOnMouseEnter: true,
        stopOnInteraction: false,
        playOnMouseLeave: true
      })
    ]
  );

  document.querySelector('.next-btn-partner')?.addEventListener('click', () => emblaPartners.scrollNext());
  document.querySelector('.prev-btn-partner')?.addEventListener('click', () => emblaPartners.scrollPrev());
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

// VIP Transfer Modal ve Konum Alma
// VIP Transfer Modal ve Konum Alma
const modal = document.getElementById('vip-modal');
const buttons = document.querySelectorAll('.vip-offer-modal-btn');
const closeBtn = document.querySelector('.close-modal');

// 1. Modalı Aç ve Başlangıçta GPS Konumu Dene
buttons.forEach(button => {
  button.addEventListener('click', function (e) {
    e.preventDefault();
    modal.style.display = "block";
    setTimeout(() => modal.classList.add('active'), 10);

    const originInput = document.getElementById('origin-input');

    // GPS ile konum almayı dene (Varsayılan olarak)
    if (navigator.geolocation) {
      originInput.value = "Konumunuz aranıyor...";
      navigator.geolocation.getCurrentPosition(function (position) {
        const lat = position.coords.latitude;
        const lng = position.coords.longitude;
        originInput.value = "📍 Mevcut Konumunuz Tanımlandı";
        originInput.setAttribute('data-lat', lat);
        originInput.setAttribute('data-lng', lng);
      }, function () {
        originInput.value = "";
        originInput.placeholder = "Başlangıç adresini yazın...";
      });
    }
  });
});

let currentSearchController = null; // Eski istekleri iptal etmek için

function setupAutocomplete(inputId) {
  const input = document.getElementById(inputId);
  const suggestionsContainer = document.createElement('ul');
  suggestionsContainer.className = 'suggestions-list list-unstyled mt-1';
  suggestionsContainer.style.display = 'none';
  input.parentNode.appendChild(suggestionsContainer);

  let debounceTimer;

  input.addEventListener('input', function () {
    const query = this.value.trim();

    // Temizleme: Eğer 3 harften azsa her şeyi sıfırla ve kapat
    if (query.length < 3) {
      clearTimeout(debounceTimer);
      if (currentSearchController) currentSearchController.abort();
      suggestionsContainer.innerHTML = '';
      suggestionsContainer.style.display = 'none';
      return;
    }

    // Debounce: Kullanıcı yazmayı bırakana kadar bekle
    clearTimeout(debounceTimer);
    debounceTimer = setTimeout(() => {
      fetchResults(query, input, suggestionsContainer);
    }, 350); // 350ms bekleme süresi
  });
}

function fetchResults(query, input, container) {
  // Eğer halihazırda bir istek varsa iptal et (En önemli kısım burası!)
  if (currentSearchController) {
    currentSearchController.abort();
  }

  currentSearchController = new AbortController();
  const signal = currentSearchController.signal;

  // Arama başladığında minik bir efekt (Opsiyonel)
  input.style.opacity = "0.7";

  fetch(`https://photon.komoot.io/api/?q=${encodeURIComponent(query)}&limit=5&bbox=25.6,35.8,44.8,42.1`, { signal })
    .then(response => response.json())
    .then(data => {
      input.style.opacity = "1";
      container.innerHTML = '';

      if (!data.features || data.features.length === 0) {
        container.style.display = 'none';
        return;
      }

      container.style.display = 'block';
      data.features.forEach(feature => {
        const props = feature.properties;
        const name = props.name || "";
        const city = props.city || props.state || "";
        const street = props.street ? `, ${props.street}` : "";

        const li = document.createElement('li');

        const typeLabels = {
          'historic': 'Tarihi Yer',
          'leisure': 'Park/Alan',
          'railway': 'İstasyon/Durak',
          'military': 'Askeri Alan',
          'highway': 'Yol/Servis'
        };

        const label = typeLabels[props.osm_key] || 'Konum';

        li.className = 'suggestion-item p-3 cursor-pointer'; // Mobilde tıklama alanı için p-3
        li.innerHTML = `<div style="display:flex; justify-content:space-between; align-items:center;">
        <div>
            📍 <strong>${name}</strong>
            <small style="display:block; color:#888;">${props.district || props.city}</small>
        </div>
        <span style="font-size:10px; background:#333; padding:2px 6px; border-radius:4px; color:#aaa;">
            ${label}
        </span>
    </div>`;

        li.addEventListener('click', () => {
          input.value = `${name} ${city}`.trim();
          const [lng, lat] = feature.geometry.coordinates;
          input.setAttribute('data-lat', lat);
          input.setAttribute('data-lng', lng);
          container.innerHTML = '';
          container.style.display = 'none';
        });
        container.appendChild(li);
      });
    })
    .catch(err => {
      if (err.name === 'AbortError') return; // İptal edilen istek hatasını görmezden gel
      console.error("Arama hatası:", err);
      input.style.opacity = "1";
    });
}

// Başlat
setupAutocomplete('origin-input');
setupAutocomplete('destination-input');

// 3. WhatsApp'a Gönder (Gelişmiş Rota Linki)
document.getElementById('send-vip-request').addEventListener('click', function () {
  const originInput = document.getElementById('origin-input');
  const destInput = document.getElementById('destination-input');

  const originName = originInput.value;
  const destName = destInput.value;

  if (!originName || !destName) {
    alert("Lütfen her iki adresi de doldurun.");
    return;
  }

  const oLat = originInput.getAttribute('data-lat');
  const oLng = originInput.getAttribute('data-lng');
  const dLat = destInput.getAttribute('data-lat');
  const dLng = destInput.getAttribute('data-lng');

  const whatsappNo = "905438952931";

  let originParam = encodeURIComponent(`https://www.google.com/maps/@${oLat},${oLng},17z`);

  // Koordinatlar varsa profesyonel rota linki, yoksa metin aramalı link
  let routeUrl;
  if (oLat && dLat) {
    routeUrl = `https://www.google.com/maps?saddr=${oLat},${oLng}&daddr=${dLat},${dLng}&travelmode=driving`;
  } else {
    routeUrl = ``;
  }

  const ikonElmas = "\uD83D\uDC8E"; // 💎
  const ikonPin = "\uD83D\uDCCD";   // 📍
  const ikonBayrak = "\uD83C\uDFC1"; // 🏁
  const ikonHarita = "\uD83D\uDDFA"; // 🗺️

  /*const mesaj = `*💎 Yeni VIP Transfer Talebi*%0A%0A` +
    `📍 *Nereden:* ${originParam}%0A` +
    `🏁 *Nereye:* ${encodeURIComponent(destName)}%0A%0A` +
    `🗺️ *Rota ve Yol Tarifi:*%0A${encodeURIComponent(routeUrl)}%0A%0A` +
    `Bu yolculuk için fiyat teklifi alabilir miyim?`;

  window.location.href = `https://wa.me/${whatsappNo}?text=${mesaj}`;*/

  const hamMesaj = `*${ikonElmas} Yeni VIP Transfer Talebi*
  ${ikonPin} *Nereden:* ${originParam}
  ${ikonBayrak} *Nereye:* ${destName}
  ${ikonHarita} *Rota ve Yol Tarifi:*
  ${routeUrl}`;
  window.location.href = `https://wa.me/${whatsappNo}?text=${encodeURIComponent(hamMesaj)}`;

});

document.querySelector('.close-modal').addEventListener('click', function () {
  modal.classList.remove('active');
  setTimeout(() => modal.style.display = "none", 300);
});