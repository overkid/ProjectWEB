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

