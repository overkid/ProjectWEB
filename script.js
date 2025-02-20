let lastScrollTop = 0;
const nav = document.querySelector(".nav");

window.addEventListener("scroll", () => {
    let scrollTop = window.scrollY || document.documentElement.scrollTop;
    
    if (scrollTop > lastScrollTop) {
        // Скроллим вниз — скрываем nav
        nav.style.transform = "translateY(-100%)";
    } else {
        // Скроллим вверх — показываем nav
        nav.style.transform = "translateY(0)";
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