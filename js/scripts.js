// NAV MÓVIL
const navToggle = document.getElementById("navToggle");
const header = document.querySelector("header");

if (navToggle && header) {
  navToggle.addEventListener("click", () => {
    header.classList.toggle("nav-open");
  });

  // Cerrar menú al hacer click en un link
  document.querySelectorAll(".nav a").forEach((link) => {
    link.addEventListener("click", () => {
      header.classList.remove("nav-open");
    });
  });
}

// HEADER CON SOMBRA AL HACER SCROLL
if (header) {
  const onScroll = () => {
    header.classList.toggle("is-scrolled", window.scrollY > 8);
  };
  onScroll();
  window.addEventListener("scroll", onScroll, { passive: true });
}

// ANIMACIONES DE ENTRADA (SCROLL REVEAL)
const revealTargets = document.querySelectorAll(
  ".hero-card, .hero-stat-card, .about-panel, .about-title, .service-card, .gallery-item, .office-card, .contact-form, .section-title, .section-subtitle, [data-reveal]"
);

revealTargets.forEach((el, i) => {
  el.classList.add("reveal");
  el.style.setProperty("--reveal-delay", `${(i % 4) * 70}ms`);
});

if ("IntersectionObserver" in window) {
  const observer = new IntersectionObserver(
    (entries, obs) => {
      entries.forEach((entry) => {
        if (entry.isIntersecting) {
          entry.target.classList.add("is-visible");
          obs.unobserve(entry.target);
        }
      });
    },
    { threshold: 0.12, rootMargin: "0px 0px -40px 0px" }
  );
  revealTargets.forEach((el) => observer.observe(el));
} else {
  revealTargets.forEach((el) => el.classList.add("is-visible"));
}

// CARRUSEL GALERÍA
const galleryTrack = document.getElementById("galleryTrack");
const galleryDots = document.querySelectorAll(".gallery-dot");
let currentSlide = 0;

function goToSlide(index) {
  if (!galleryTrack) return;
  const items = document.querySelectorAll(".gallery-item");
  if (!items.length) return;
  const width = items[0].offsetWidth + 22; // item + gap
  galleryTrack.scrollTo({
    left: width * index,
    behavior: "smooth",
  });

  galleryDots.forEach((dot) => dot.classList.remove("active"));
  const activeDot = document.querySelector(
    `.gallery-dot[data-index="${index}"]`
  );
  if (activeDot) activeDot.classList.add("active");
  currentSlide = index;
}

galleryDots.forEach((dot) => {
  dot.addEventListener("click", () => {
    const index = Number(dot.dataset.index);
    goToSlide(index);
  });
});

// autoplay suave
if (galleryDots.length) {
  setInterval(() => {
    const next = (currentSlide + 1) % galleryDots.length;
    goToSlide(next);
  }, 8000);
}
