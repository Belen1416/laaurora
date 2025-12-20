// NAV MÓVIL
const navToggle = document.getElementById("navToggle");
const header = document.querySelector("header");

navToggle.addEventListener("click", () => {
  header.classList.toggle("nav-open");
});

// Cerrar menú al hacer click en un link
document.querySelectorAll(".nav a").forEach((link) => {
  link.addEventListener("click", () => {
    header.classList.remove("nav-open");
  });
});

// TICKER DE MENSAJES
const ticker = document.getElementById("ticker-text");
const tickerMessages = [
  "Consulta por WhatsApp el tipo de cambio antes de venir a la oficina.",
  "Podemos coordinar cambio delivery en zonas seleccionadas de Lima.",
  "Atendemos a personas y empresas con operaciones desde montos pequeños hasta montos altos.",
];
let tickerIndex = 0;

setInterval(() => {
  tickerIndex = (tickerIndex + 1) % tickerMessages.length;
  ticker.textContent = tickerMessages[tickerIndex];
}, 6000);

// CARRUSEL GALERÍA
const galleryTrack = document.getElementById("galleryTrack");
const galleryDots = document.querySelectorAll(".gallery-dot");
let currentSlide = 0;

function goToSlide(index) {
  const items = document.querySelectorAll(".gallery-item");
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
setInterval(() => {
  const next = (currentSlide + 1) % galleryDots.length;
  goToSlide(next);
}, 8000);
