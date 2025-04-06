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

        // Логотип и фон должны быть видимыми
        logo.style.opacity = "1";
        nav.classList.add("scrolled"); 

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

        // Мгновенно скрываем ссылки перед закрытием меню
        menuLinks.forEach((link) => {
            link.style.opacity = "0";
            link.style.transform = "translateY(10px)";
        });

        // Если экран меньше 768px и прокрутка больше 20px — скрываем лого, но проверяем направление скролла
        if (window.innerWidth <= 768) {
            let scrollTop = window.scrollY;
            
            if (scrollTop > 20) {
                logo.style.opacity = "0"; 
                nav.classList.add("scrolled"); // Оставляем nav затемнённым
            } else {
                logo.style.opacity = "1";
                nav.classList.remove("scrolled");
            }
        }
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

    const thresholdValue = window.innerWidth > 768 ? 0.4 : 0.2;
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
        mainContent.classList.add("main-blur");
        setTimeout(() => {
            preloader.classList.add("hidden");
            setTimeout(() => {
                preloader.style.display = "none";
            }, 1000);
            setTimeout(() => {
                mainContent.classList.remove("main-blur");
            }, 200);
        }, 400);
    });

    // Автоматический зум для больших экранов
function adjustZoom() {
    let baseWidth = window.innerWidth <= 1440 ? 1600 : 1920;
    if (window.innerWidth > 768) {
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



document.addEventListener("DOMContentLoaded", () => {
    // Получаем все карточки товаров
    const cards = document.querySelectorAll(".cardz");
    const modals = document.querySelectorAll(".modal");
    const closeBtns = document.querySelectorAll(".close");

    // Функция для открытия модального окна
    cards.forEach(card => {
        card.addEventListener("click", () => {
            const modalId = card.getAttribute("data-modal");
            const modal = document.getElementById(modalId);
            modal.style.display = "block";
            setTimeout(() => {
                modal.classList.add("open");
            }, 10);
        });
    });

    // Функция для закрытия модального окна
    closeBtns.forEach(btn => {
        btn.addEventListener("click", () => {
            const modal = btn.closest(".modal");
            modal.classList.remove("open");
            setTimeout(() => {
                modal.style.display = "none";
            }, 300);
        });
    });

    // Закрытие модального окна при клике вне его области
    window.addEventListener("click", (event) => {
        modals.forEach(modal => {
            if (event.target == modal) {
                modal.classList.remove("open");
                setTimeout(() => {
                    modal.style.display = "none";
                }, 300);
            }
        });
    });
});



// Корзина - добавление товаров
document.addEventListener("DOMContentLoaded", () => {
    const addToCartButtons = document.querySelectorAll(".btn_add_basket");
    const cartCount = document.querySelector(".goods");

    // Функция для добавления товара в корзину
    addToCartButtons.forEach(button => {
        button.addEventListener("click", () => {
            const productData = button.getAttribute("data-product");
            const product = JSON.parse(productData);
            
            // Преобразуем цену в число
            product.price = parseFloat(product.price);
            
            addToCart(product);
            updateCartCount();
        });
    });

    // Функция добавления товара в localStorage
    function addToCart(product) {
        let cart = JSON.parse(localStorage.getItem("cart")) || [];
        cart.push(product);
        localStorage.setItem("cart", JSON.stringify(cart));
    }

    // Функция обновления счетчика корзины
    function updateCartCount() {
        let cart = JSON.parse(localStorage.getItem("cart")) || [];
        const cartCountElements = document.querySelectorAll(".goods");
        cartCountElements.forEach(element => {
            element.textContent = cart.length;
        });
    }

    // Инициализация счетчика при загрузке страницы
    updateCartCount();
});

// Корзина - отображение и подсчет суммы
document.addEventListener("DOMContentLoaded", () => {
    const basketItems = document.querySelector(".basket-items");
    const totalPriceElement = document.querySelector(".total-price");
    const clearCartButton = document.querySelector(".clear-cart");

    // Функция форматирования цены
    function formatPrice(price) {
        return new Intl.NumberFormat('ru-RU', {
            style: 'decimal',
            minimumFractionDigits: 0
        }).format(price);
    }

    // Функция отображения товаров в корзине
    function displayCart() {
        let cart = JSON.parse(localStorage.getItem("cart")) || [];
        basketItems.innerHTML = ""; // Очищаем корзину перед обновлением

        let totalPrice = 0;

        cart.forEach((item, index) => {
            const itemElement = document.createElement("div");
            itemElement.classList.add("basket-item");

            // Преобразуем цену в число, если это еще не сделано
            const itemPrice = typeof item.price === 'number' ? item.price : parseFloat(item.price);
            totalPrice += itemPrice;

            itemElement.innerHTML = `
                <img src="${item.image}" alt="${item.name}" width="100">
                <div class="item-info">
                    <p style="color:var(--black); font-weight:600">${item.name}</p>
                    <p>${formatPrice(itemPrice)} ₽</p>
                </div>
                <button class="remove-item" data-index="${index}">Удалить</button>
            `;

            basketItems.appendChild(itemElement);
        });

        totalPriceElement.textContent = `${formatPrice(totalPrice)} ₽`;
    }

    // Функция удаления товара из корзины
    function removeItem(index) {
        let cart = JSON.parse(localStorage.getItem("cart")) || [];
        cart.splice(index, 1);
        localStorage.setItem("cart", JSON.stringify(cart));
        displayCart();
        updateCartCount();
    }

    // Функция очистки корзины
    function clearCart() {
        localStorage.removeItem("cart");
        displayCart();
        updateCartCount();
    }

    // Обработчик для кнопок удаления
    basketItems.addEventListener("click", (event) => {
        if (event.target.classList.contains("remove-item")) {
            const index = parseInt(event.target.getAttribute("data-index"));
            removeItem(index);
        }
    });

    // Обработчик для кнопки очистки корзины
    if (clearCartButton) {
        clearCartButton.addEventListener("click", clearCart);
    }

    // Инициализация корзины при загрузке страницы
    displayCart();
});



document.getElementById('subscribe-form').addEventListener('submit', function(e) {
    e.preventDefault(); // Отменяем стандартную отправку формы
    
    const formData = new FormData(this); // Собираем данные формы
    const messageDiv = document.getElementById('message');
    
    // Отправляем запрос на сервер
    fetch('subscribe.php', {
        method: 'POST',
        body: formData
    })
    .then(response => response.text())
    .then(data => {
        messageDiv.textContent = data; // Показываем ответ сервера
        messageDiv.style.color = data.includes('Ошибка') ? 'red' : 'green';
        
        // Очищаем поле ввода после успешной отправки
        if (!data.includes('Ошибка')) {
            this.reset();
        }
    })
    .catch(error => {
        messageDiv.textContent = 'Произошла ошибка при отправке.';
        messageDiv.style.color = 'red';
    });
});



// В обработчике fetch:
messageDiv.textContent = data;
messageDiv.style.color = data.includes('Ошибка') ? 'red' : 'green';
messageDiv.classList.add('show');

// Через 5 секунд скрываем сообщение
setTimeout(() => {
    messageDiv.classList.remove('show');
}, 5000);


const emailInput = document.querySelector('input[name="email"]');
emailInput.addEventListener('input', function() {
    if (!this.checkValidity()) {
        this.setCustomValidity('Введите корректный email (например, user@example.com)');
    } else {
        this.setCustomValidity('');
    }
});



// Обработка оформления заказа
document.querySelector('.checkout-button').addEventListener('click', function(e) {
    const cart = JSON.parse(localStorage.getItem('cart')) || [];
    
    if (cart.length === 0) {
        e.preventDefault();
        alert('Ваша корзина пуста!');
        return;
    }
    
    // Заполняем скрытые поля формы
    document.getElementById('cart-items').value = JSON.stringify(cart);
    
    const totalPrice = parseFloat(
        document.querySelector('.total-price').textContent
            .replace(/\D/g, '')
    );
    document.getElementById('total-price').value = totalPrice;
});

// Маска для телефона
document.getElementById('phone')?.addEventListener('input', function(e) {
    let value = this.value.replace(/\D/g, '');
    let formattedValue = '';
    
    if (value.length > 0) {
        formattedValue = '+7 (' + value.substring(1, 4);
    }
    if (value.length >= 4) {
        formattedValue += ') ' + value.substring(4, 7);
    }
    if (value.length >= 7) {
        formattedValue += '-' + value.substring(7, 9);
    }
    if (value.length >= 9) {
        formattedValue += '-' + value.substring(9, 11);
    }
    
    this.value = formattedValue;
});


/////////////


