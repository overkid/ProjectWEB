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
    document.querySelector(".main-photo1").style.transform = `translateY(${scrollTop * -0.2}px)`;
    document.querySelector(".main-photo2").style.transform = `translateY(${scrollTop * -0.4}px)`;
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