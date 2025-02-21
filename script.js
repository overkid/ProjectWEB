let lastScrollTop = 0;
const nav = document.querySelector(".nav");
const hud = document.querySelector(".hud");

window.addEventListener("scroll", () => {
    let scrollTop = window.scrollY || document.documentElement.scrollTop;

    if (scrollTop > lastScrollTop) {
        hud.style.opacity = "0";
        nav.classList.add("scrolled");
    } else {
        hud.style.opacity = "1";
        nav.classList.remove("scrolled");
    }

    lastScrollTop = scrollTop;
});



window.addEventListener("scroll", () => {
  let scrollTop = window.scrollY;

  let photo1 = document.querySelector(".main-photo1");
  let photo2 = document.querySelector(".main-photo2");

  // Параллакс-движение вверх
  photo1.style.transform = `translateY(${scrollTop * -0.2}px)`;
  photo2.style.transform = `translateY(${scrollTop * -0.4}px)`;

  // Блюр, зависящий от скролла (от 0px до 10px)
  let blurValue = Math.min(scrollTop / 100, 5); 
  photo1.style.filter = `blur(${blurValue}px)`;
  photo2.style.filter = `blur(${blurValue}px)`;
});



document.addEventListener("DOMContentLoaded", () => {
    const sections = document.querySelectorAll(".gallery-content");
  
    const observer = new IntersectionObserver(
      (entries) => {
        entries.forEach((entry) => {
          if (entry.isIntersecting) {
            gsap.to(entry.target, { opacity: 1, y: 0, duration: 0.4 });
            observer.unobserve(entry.target); // Чтобы не повторялось
          }
        });
      },
      { threshold: 0.5 }
    );
  
    sections.forEach((section) => observer.observe(section));
  });

  document.addEventListener("DOMContentLoaded", () => {
    const sections = document.querySelectorAll(".features-content");
  
    const observer = new IntersectionObserver(
      (entries) => {
        entries.forEach((entry) => {
          if (entry.isIntersecting) {
            gsap.to(entry.target, { opacity: 1, y: 0, duration: 0.4 });
            observer.unobserve(entry.target); // Чтобы не повторялось
          }
        });
      },
      { threshold: 0.5 }
    );
  
    sections.forEach((section) => observer.observe(section));
  });

  document.addEventListener("DOMContentLoaded", () => {
    const sections = document.querySelectorAll(".cta1, .cta2");
  
    const observer = new IntersectionObserver(
      (entries) => {
        entries.forEach((entry) => {
          if (entry.isIntersecting) {
            gsap.to(entry.target, { opacity: 1, y: 0, duration: 0.4 });
            observer.unobserve(entry.target); // Чтобы не повторялось
          }
        });
      },
      { threshold: 0.5 }
    );
  
    sections.forEach((section) => observer.observe(section));
  });

  window.addEventListener("load", () => {
    const preloader = document.getElementById("preloader");
    setTimeout(() => {
        preloader.classList.add("hidden");
        setTimeout(() => {
            preloader.style.display = "none"; // Удаляем из DOM после анимации
        }, 1000);
    }, 500); // Короткая задержка, чтобы не исчезало резко
});



function adjustZoom() {
  const baseWidth = 1920; // Базовая ширина дизайна
  const screenWidth = window.innerWidth; // Текущая ширина экрана
  const zoomLevel = screenWidth / baseWidth; // Вычисляем коэффициент масштаба

  document.body.style.zoom = zoomLevel; // Применяем масштаб ко всему body
}

// Вызываем функцию при загрузке страницы и при изменении размера окна
window.addEventListener('resize', adjustZoom);
adjustZoom();


const logo = document.querySelector(".logo img");
const logos = ["icons/Logo2.svg", "icons/Logo3.svg"];
let currentIndex = 0; // Индекс для чередования

logo.addEventListener("mouseenter", () => {
    logo.src = logos[currentIndex]; // Устанавливаем следующий логотип
    currentIndex = (currentIndex + 1) % logos.length; // Переключаем индекс (0 → 1 → 0)
});

logo.addEventListener("mouseleave", () => {
    logo.src = "icons/Logo.svg"; // Возвращаем стандартный логотип
});