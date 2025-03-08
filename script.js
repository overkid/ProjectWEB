document.addEventListener("DOMContentLoaded", () => {
    // Выбор элементов
    const logo = document.querySelector(".logo img");
    const nav = document.querySelector(".nav");
    const hud = document.querySelector(".hud");
    const burger = document.querySelector(".burger");
    const burgerIcon = document.querySelector(".burger img");
    const mobileMenu = document.querySelector(".mobile-menu");
    const menuLinks = document.querySelectorAll(".mobile-menu a");
    const mainContent = document.querySelector("main");

    let lastScrollTop = 0;

    // Скролл: скрытие логотипа и хедера
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

            if (window.innerWidth <= 768 && !mobileMenu.classList.contains("active")) {
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

    // Бургер-меню: анимация и управление логотипом
    burger.addEventListener("click", () => {
        mobileMenu.classList.toggle("active");

        if (mobileMenu.classList.contains("active")) {
            burgerIcon.style.opacity = "0";
            setTimeout(() => {
                burgerIcon.src = "icons/menu-opened.svg";
                burgerIcon.style.opacity = "1";
            }, 200);
            document.body.style.overflow = "hidden";
            mainContent.classList.add("main-blur");

            // Логотип должен быть видимым
            logo.style.opacity = "1";

            // Плавное появление пунктов меню
            setTimeout(() => {
                menuLinks.forEach((link, index) => {
                    setTimeout(() => {
                        link.style.opacity = "1";
                        link.style.transform = "translateY(0)";
                    }, index * 200);
                });
            }, 700);
        } else {
            burgerIcon.style.opacity = "0";
            setTimeout(() => {
                burgerIcon.src = "icons/menu-closed.svg";
                burgerIcon.style.opacity = "1";
            }, 200);
            document.body.style.overflow = "";
            mainContent.classList.remove("main-blur");

            // Если экран меньше 768px и прокрутка больше 20px — скрываем лого
            if (window.innerWidth <= 768 && window.scrollY > 20) {
                logo.style.opacity = "0";
            }

            // Мгновенно скрываем ссылки перед закрытием меню
            menuLinks.forEach((link) => {
                link.style.opacity = "0";
                link.style.transform = "translateY(10px)";
            });
        }
    });

    // Параллакс-эффект для фото
    window.addEventListener("scroll", () => {
        let scrollTop = window.scrollY;
        let photo1 = document.querySelector(".main-photo1");
        let photo2 = document.querySelector(".main-photo2");

        photo1.style.transform = `translateY(${scrollTop * -0.2}px)`;
        photo2.style.transform = `translateY(${scrollTop * -0.4}px)`;

        let blurValue = Math.min(scrollTop / 100, 5);
        photo1.style.filter = `blur(${blurValue}px)`;
        photo2.style.filter = `blur(${blurValue}px)`;
    });

    // Анимация появления элементов (GSAP)
    const elements = document.querySelectorAll("h2, .cards, .p-text, .features-content, .cta1, .cta2");
    elements.forEach((el) => gsap.set(el, { opacity: 0, y: 20 }));

    const thresholdValue = window.innerWidth > 768 ? 0.4 : 0.1;
    const observer = new IntersectionObserver((entries, obs) => {
        entries.forEach((entry) => {
            if (entry.isIntersecting) {
                gsap.to(entry.target, { opacity: 1, y: 0, duration: 0.4, ease: "power1.out" });
                obs.unobserve(entry.target);
            }
        });
    }, { threshold: thresholdValue });

    elements.forEach((el) => observer.observe(el));

    // Лоадер (прелоадер)
    window.addEventListener("load", () => {
        const preloader = document.getElementById("preloader");
        setTimeout(() => {
            preloader.classList.add("hidden");
            setTimeout(() => {
                preloader.style.display = "none";
            }, 1000);
        }, 400);
    });

    // Автоматический зум для больших экранов
    function adjustZoom() {
        if (window.innerWidth > 768) {
            const baseWidth = 1920;
            const screenWidth = window.innerWidth;
            const zoomLevel = screenWidth / baseWidth;
            document.body.style.zoom = zoomLevel;
        } else {
            document.body.style.zoom = "";
        }
    }
    window.addEventListener("resize", adjustZoom);
    adjustZoom();

    // Ховер-анимация логотипа (смена изображения)
    const logos = ["icons/Logo2.svg", "icons/Logo3.svg"];
    let currentIndex = 0;

    logo.addEventListener("mouseenter", () => {
        logo.src = logos[currentIndex];
        currentIndex = (currentIndex + 1) % logos.length;
    });

    logo.addEventListener("mouseleave", () => {
        logo.src = "icons/Logo.svg";
    });

    // Фон главного фото с параллаксом
    window.addEventListener("scroll", () => {
        if (window.innerWidth >= 768) {
            let scrollTop = window.scrollY;
            let translateY = scrollTop * -0.1;
            document.querySelector(".main-photo").style.backgroundPosition = `center calc(50% + ${translateY}px)`;
        }
    });
});
