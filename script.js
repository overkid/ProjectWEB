let lastScrollTop = 0;
const nav = document.querySelector(".nav");
const hud = document.querySelector(".hud");

window.addEventListener("scroll", () => {
    let scrollTop = window.scrollY || document.documentElement.scrollTop;

    if (scrollTop <= 20) {
        hud.style.opacity = "1";
        nav.classList.remove("scrolled");

        if (window.innerWidth <= 768) {
            logo.style.opacity = "1";
        }
    } else if (scrollTop > lastScrollTop) {
        hud.style.opacity = "0";
        nav.classList.add("scrolled");

        if (window.innerWidth <= 768) {
            logo.style.opacity = "0";
        }
    } else {
        hud.style.opacity = "1";
        nav.classList.remove("scrolled");

        if (window.innerWidth <= 768) {
            logo.style.opacity = "1";
        }
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
    const elements = document.querySelectorAll("h2, .cards, .p-text, .features-content, .cta1, .cta2");
  
    elements.forEach((el) => {
        gsap.set(el, { opacity: 0, y: 20 });
    });
  
    const thresholdValue = window.innerWidth > 768 ? 0.4 : 0.1;
  
    const observer = new IntersectionObserver(
        (entries, obs) => {
            entries.forEach((entry) => {
                if (entry.isIntersecting) {
                    gsap.to(entry.target, { 
                        opacity: 1, 
                        y: 0, 
                        duration: 0.4, 
                        ease: "power1.out"
                    });
                    obs.unobserve(entry.target);
                }
            });
        },
        { threshold: thresholdValue }
    );
  
    elements.forEach((el) => observer.observe(el));
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
    if (window.innerWidth > 768) {
      const baseWidth = 1920;
      const screenWidth = window.innerWidth;
      const zoomLevel = screenWidth / baseWidth;
      document.body.style.zoom = zoomLevel;
    } else {
      document.body.style.zoom = ""; // Убираем zoom на мобилках
    }
  }
  
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


window.addEventListener("scroll", () => {
    // Проверяем, если ширина экрана 768px или меньше
    if (window.innerWidth >= 768) {
      let scrollTop = window.scrollY;
      let translateY = scrollTop * -0.1; // Двигаем вверх, но мягко
  
      document.querySelector(".main-photo").style.backgroundPosition = `center calc(50% + ${translateY}px)`;
    }
  });

  
  const burger = document.querySelector('.burger');
  const burgerIcon = document.querySelector('.burger img');
  const mobileMenu = document.querySelector('.mobile-menu');
  const mainContent = document.querySelector('main');
  
  burger.addEventListener('click', () => {
      mobileMenu.classList.toggle('active');
  
      if (mobileMenu.classList.contains('active')) {
          burgerIcon.style.opacity = '0';
  
          setTimeout(() => {
              burgerIcon.src = 'icons/menu-opened.svg';
              burgerIcon.style.opacity = '1';
          }, 200);
          document.body.style.overflow = 'hidden';
          mainContent.classList.add('main-blur');
      } else {
          burgerIcon.style.opacity = '0';
  
          setTimeout(() => {
              burgerIcon.src = 'icons/menu-closed.svg';
              burgerIcon.style.opacity = '1';
          }, 200);
          document.body.style.overflow = '';
          mainContent.classList.remove('main-blur');
      }
  });