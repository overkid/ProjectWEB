<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hove</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="catalog.css">
</head>
<body>
<div class="nav">
        <div class="logo">
            <a href="index.html"><img src="icons/Logo.svg"></a>
        </div>
        <div class="hud">
            <a href="index.html" class="link">Главная</a>
            <a href="main.php" class="link" style="color:var(--black)">Каталог</a>
            <a href="contacts.php" class="link">Контакты</a>
         </div>
         <div class="basket">
            <a href="basket.html" class="link link-basket" style="color:var(--black)">Корзина (<span class="goods">0</span>)</a>
         </div>
         <div class="burger">
            <img src="icons/menu-closed.svg">
         </div>

         <div class="mobile-menu">
            <a href="index.html" class="link" style="color:var(--black)">• Главная</a>
            <a href="main.php" class="link" style="color:var(--gray)">• Каталог</a>
            <a href="contacts.php" class="link" style="color:var(--gray)">• Контакты</a>
            <a href="#" class="link">Корзина (<span class="goods">0</span>)</a>
        </div>
    </div>
    <main>

    <section class="ctlg">
        <div class="container-ctlg">
            <div class="zzz">
                <h1>Каталог.</h1>
            </div>
            <div class="cards-ctlg">
    <div class="cardz" data-modal="modal1">
        <div class="card-disc">
            <p>ö-15</p>
            <p>light</p>
        </div>
        <div class="price">
            <h3>12 990 ₽</h3>
        </div>
    </div>

    <div class="cardz" data-modal="modal2">
        <div class="card-disc">
            <p>ö-02</p>
            <p>dark</p>
        </div>
        <div class="price">
            <h3>15 990 ₽</h3>
        </div>
    </div>

    <div class="cardz" data-modal="modal3">
        <div class="card-disc">
            <p>ö-18</p>
            <p>light</p>
        </div>
        <div class="price">
            <h3>13 490 ₽</h3>
        </div>
    </div>

    <div class="cardz" data-modal="modal4">
        <div class="card-disc">
            <p>ö-04</p>
            <p>dark</p>
        </div>
        <div class="price">
            <h3>15 990 ₽</h3>
        </div>
    </div>

    <div class="cardz" data-modal="modal5">
        <div class="card-disc">
            <p>ö-15</p>
            <p>light</p>
        </div>
        <div class="price">
            <h3>15 990 ₽</h3>
        </div>
    </div>

    <div class="cardz" data-modal="modal6">
        <div class="card-disc">
            <p>ö-15</p>
            <p>light</p>
        </div>
        <div class="price">
            <h3>15 990 ₽</h3>
        </div>
    </div>

    <div class="cardz" data-modal="modal7">
        <div class="card-disc">
            <p>ö-15</p>
            <p>light</p>
        </div>
        <div class="price">
            <h3>15 990 ₽</h3>
        </div>
    </div>

    <div class="cardz" data-modal="modal8">
        <div class="card-disc">
            <p>ö-02</p>
            <p>dark</p>
        </div>
        <div class="price">
            <h3>15 990 ₽</h3>
        </div>
    </div>

    <div class="cardz" data-modal="modal9">
        <div class="card-disc">
            <p>ö-18</p>
            <p>light</p>
        </div>
        <div class="price">
            <h3>15 990 ₽</h3>
        </div>
    </div>

    <div class="cardz" data-modal="modal10">
        <div class="card-disc">
            <p>ö-04</p>
            <p>dark</p>
        </div>
        <div class="price">
            <h3>15 990 ₽</h3>
        </div>
    </div>

    <div class="mailing">
        <div class="mailing-content">
            <h3>Будь в курсе<br><span>появления новинок.</span></h3>
            <form class="mail-input">
                <div class="mail-img-input">
                    <img src="icons/mail.svg">
                    <input class="mail" type="email" placeholder="youremail@mail.com">
                </div>

                <button type="submit"><img src="icons/Collection Arrow.svg"></button>
            </form>
        </div>
    </div>

</div>
    </section>

<div id="modal1" class="modal">
    <div class="modal-content">
        <div class="model-name">
            <span class="close"><img src="icons/Collection Arrow-Gray.svg"></span>
            <h1>Ӧ-15</h1>
        </div>
        <div class="main_modal_block">
            <div class="left_modal_block">
                <div class="prew_cardz">
                    <img src="media/Product Card.png" height="440px" width="440px">
                </div>
            </div>
            <div class="right_modal_block">
                <div class="info_cardz">
                    <div class="info">
                        <div class="model">
                            <p class="p-disc-g">Модель:</p>
                            <p class="p-disc-b">ö-15</p>
                        </div>
                        <div class="sell">
                            <p class="p-disc-g">Цвет:</p>
                            <p class="p-disc-b">LIGHT</p>
                        </div>
                    </div>
                    <div class="line-space"></div>
                    <div class="price-info">
                        <h3>12 990 ₽</h3>
                        <p class="dollar-price">~119,18 $</p>
                    </div>
                    <p>Этот светлый деревянный стул, вдохновленный швейцарской архитектурой и скандинавским минимализмом.</p>
                </div>
                <button class="btn_add_basket" data-product='{"name": "Ӧ-15", "price": 12990, "image": "media/Product Card.png"}'>
                    <h3>В корзину</h3>
                    <img src="icons/plus-solid.svg">
                </button>
            </div>
        </div>
    </div>
</div>

<div id="modal2" class="modal">
    <div class="modal-content">
        <div class="model-name">
            <span class="close"><img src="icons/Collection Arrow-Gray.svg"></span>
            <h1>Ӧ-02</h1>
        </div>
        <div class="main_modal_block">
            <div class="left_modal_block">
                <div class="prew_cardz">
                    <img src="media/Product Card-1.png" height="440px" width="440px">
                </div>
            </div>
            <div class="right_modal_block">
                <div class="info_cardz">
                    <div class="info">
                        <div class="model">
                            <p class="p-disc-g">Модель:</p>
                            <p class="p-disc-b">ö-02</p>
                        </div>
                        <div class="sell">
                            <p class="p-disc-g">Цвет:</p>
                            <p class="p-disc-b">DARK</p>
                        </div>
                    </div>
                    <div class="line-space"></div>
                    <div class="price-info">
                        <h3>15 990 ₽</h3>
                        <p class="dollar-price">~147,18 $</p>
                    </div>
                    <p>Этот темный деревянный стул, вдохновленный швейцарской архитектурой и скандинавским минимализмом.</p>
                </div>
                <button class="btn_add_basket" data-product='{"name": "Ӧ-02", "price": 15990, "image": "media/Product Card-1.png"}'>
                    <h3>В корзину</h3>
                    <img src="icons/plus-solid.svg">
                </button>
            </div>
        </div>
    </div>
</div>

<div id="modal3" class="modal">
    <div class="modal-content">
        <div class="model-name">
            <span class="close"><img src="icons/Collection Arrow-Gray.svg"></span>
            <h1>Ӧ-18</h1>
        </div>
        <div class="main_modal_block">
            <div class="left_modal_block">
                <div class="prew_cardz">
                    <img src="media/Product Card-2.png" height="440px" width="440px">
                </div>
            </div>
            <div class="right_modal_block">
                <div class="info_cardz">
                    <div class="info">
                        <div class="model">
                            <p class="p-disc-g">Модель:</p>
                            <p class="p-disc-b">ö-18</p>
                        </div>
                        <div class="sell">
                            <p class="p-disc-g">Цвет:</p>
                            <p class="p-disc-b">LIGHT</p>
                        </div>
                    </div>
                    <div class="line-space"></div>
                    <div class="price-info">
                        <h3>13 490 ₽</h3>
                        <p class="dollar-price">~123,18 $</p>
                    </div>
                    <p>Этот светлый деревянный стул, вдохновленный швейцарской архитектурой и скандинавским минимализмом.</p>
                </div>
                <button class="btn_add_basket" data-product='{"name": "Ӧ-18", "price": 13490, "image": "media/Product Card-2.png"}'>
                    <h3>В корзину</h3>
                    <img src="icons/plus-solid.svg">
                </button>
            </div>
        </div>
    </div>
</div>

<div id="modal4" class="modal">
    <div class="modal-content">
        <div class="model-name">
            <span class="close"><img src="icons/Collection Arrow-Gray.svg"></span>
            <h1>Ӧ-04</h1>
        </div>
        <div class="main_modal_block">
            <div class="left_modal_block">
                <div class="prew_cardz">
                    <img src="media/Product Card-3.png" height="440px" width="440px">
                </div>
            </div>
            <div class="right_modal_block">
                <div class="info_cardz">
                    <div class="info">
                        <div class="model">
                            <p class="p-disc-g">Модель:</p>
                            <p class="p-disc-b">ö-04</p>
                        </div>
                        <div class="sell">
                            <p class="p-disc-g">Цвет:</p>
                            <p class="p-disc-b">DARK</p>
                        </div>
                    </div>
                    <div class="line-space"></div>
                    <div class="price-info">
                        <h3>15 990 ₽</h3>
                        <p class="dollar-price">~147,18 $</p>
                    </div>
                    <p>Этот темный деревянный стул, вдохновленный швейцарской архитектурой и скандинавским минимализмом.</p>
                </div>
                <button class="btn_add_basket" data-product='{"name": "Ӧ-04", "price": 15990, "image": "media/Product Card-3.png"}'>
                    <h3>В корзину</h3>
                    <img src="icons/plus-solid.svg">
                </button>
            </div>
        </div>
    </div>
</div>

<div id="modal5" class="modal">
    <div class="modal-content">
        <div class="model-name">
            <span class="close"><img src="icons/Collection Arrow-Gray.svg"></span>
            <h1>Ӧ-15</h1>
        </div>
        <div class="main_modal_block">
            <div class="left_modal_block">
                <div class="prew_cardz">
                    <img src="media/Product Card-2.png" height="440px" width="440px">
                </div>
            </div>
            <div class="right_modal_block">
                <div class="info_cardz">
                    <div class="info">
                        <div class="model">
                            <p class="p-disc-g">Модель:</p>
                            <p class="p-disc-b">ö-15</p>
                        </div>
                        <div class="sell">
                            <p class="p-disc-g">Цвет:</p>
                            <p class="p-disc-b">LIGHT</p>
                        </div>
                    </div>
                    <div class="line-space"></div>
                    <div class="price-info">
                        <h3>15 990 ₽</h3>
                        <p class="dollar-price">~147,18 $</p>
                    </div>
                    <p>Этот светлый деревянный стул, вдохновленный швейцарской архитектурой и скандинавским минимализмом.</p>
                </div>
                <button class="btn_add_basket" data-product='{"name": "Ӧ-15", "price": 15990, "image": "media/Product Card-2.png"}'>
                    <h3>В корзину</h3>
                    <img src="icons/plus-solid.svg">
                </button>
            </div>
        </div>
    </div>
</div>

<div id="modal6" class="modal">
    <div class="modal-content">
        <div class="model-name">
            <span class="close"><img src="icons/Collection Arrow-Gray.svg"></span>
            <h1>Ӧ-15</h1>
        </div>
        <div class="main_modal_block">
            <div class="left_modal_block">
                <div class="prew_cardz">
                    <img src="media/Product Card-3.png" height="440px" width="440px">
                </div>
            </div>
            <div class="right_modal_block">
                <div class="info_cardz">
                    <div class="info">
                        <div class="model">
                            <p class="p-disc-g">Модель:</p>
                            <p class="p-disc-b">ö-15</p>
                        </div>
                        <div class="sell">
                            <p class="p-disc-g">Цвет:</p>
                            <p class="p-disc-b">LIGHT</p>
                        </div>
                    </div>
                    <div class="line-space"></div>
                    <div class="price-info">
                        <h3>15 990 ₽</h3>
                        <p class="dollar-price">~147,18 $</p>
                    </div>
                    <p>Этот светлый деревянный стул, вдохновленный швейцарской архитектурой и скандинавским минимализмом.</p>
                </div>
                <button class="btn_add_basket" data-product='{"name": "Ӧ-15", "price": 15990, "image": "media/Product Card-3.png"}'>
                    <h3>В корзину</h3>
                    <img src="icons/plus-solid.svg">
                </button>
            </div>
        </div>
    </div>
</div>

<div id="modal7" class="modal">
    <div class="modal-content">
        <div class="model-name">
            <span class="close"><img src="icons/Collection Arrow-Gray.svg"></span>
            <h1>Ӧ-15</h1>
        </div>
        <div class="main_modal_block">
            <div class="left_modal_block">
                <div class="prew_cardz">
                    <img src="media/Product Card.png" height="440px" width="440px">
                </div>
            </div>
            <div class="right_modal_block">
                <div class="info_cardz">
                    <div class="info">
                        <div class="model">
                            <p class="p-disc-g">Модель:</p>
                            <p class="p-disc-b">ö-15</p>
                        </div>
                        <div class="sell">
                            <p class="p-disc-g">Цвет:</p>
                            <p class="p-disc-b">LIGHT</p>
                        </div>
                    </div>
                    <div class="line-space"></div>
                    <div class="price-info">
                        <h3>15 990 ₽</h3>
                        <p class="dollar-price">~147,18 $</p>
                    </div>
                    <p>Этот светлый деревянный стул, вдохновленный швейцарской архитектурой и скандинавским минимализмом.</p>
                </div>
                <button class="btn_add_basket" data-product='{"name": "Ӧ-15", "price": 15990, "image": "media/Product Card.png"}'>
                    <h3>В корзину</h3>
                    <img src="icons/plus-solid.svg">
                </button>
            </div>
        </div>
    </div>
</div>

<div id="modal8" class="modal">
    <div class="modal-content">
        <div class="model-name">
            <span class="close"><img src="icons/Collection Arrow-Gray.svg"></span>
            <h1>Ӧ-02</h1>
        </div>
        <div class="main_modal_block">
            <div class="left_modal_block">
                <div class="prew_cardz">
                    <img src="media/Product Card-1.png" height="440px" width="440px">
                </div>
            </div>
            <div class="right_modal_block">
                <div class="info_cardz">
                    <div class="info">
                        <div class="model">
                            <p class="p-disc-g">Модель:</p>
                            <p class="p-disc-b">ö-02</p>
                        </div>
                        <div class="sell">
                            <p class="p-disc-g">Цвет:</p>
                            <p class="p-disc-b">DARK</p>
                        </div>
                    </div>
                    <div class="line-space"></div>
                    <div class="price-info">
                        <h3>15 990 ₽</h3>
                        <p class="dollar-price">~147,18 $</p>
                    </div>
                    <p>Этот темный деревянный стул, вдохновленный швейцарской архитектурой и скандинавским минимализмом.</p>
                </div>
                <button class="btn_add_basket" data-product='{"name": "Ӧ-02", "price": 15990, "image": "media/Product Card-1.png"}'>
                    <h3>В корзину</h3>
                    <img src="icons/plus-solid.svg">
                </button>
            </div>
        </div>
    </div>
</div>

<div id="modal9" class="modal">
    <div class="modal-content">
        <div class="model-name">
            <span class="close"><img src="icons/Collection Arrow-Gray.svg"></span>
            <h1>Ӧ-18</h1>
        </div>
        <div class="main_modal_block">
            <div class="left_modal_block">
                <div class="prew_cardz">
                    <img src="media/Product Card-2.png" height="440px" width="440px">
                </div>
            </div>
            <div class="right_modal_block">
                <div class="info_cardz">
                    <div class="info">
                        <div class="model">
                            <p class="p-disc-g">Модель:</p>
                            <p class="p-disc-b">ö-18</p>
                        </div>
                        <div class="sell">
                            <p class="p-disc-g">Цвет:</p>
                            <p class="p-disc-b">LIGHT</p>
                        </div>
                    </div>
                    <div class="line-space"></div>
                    <div class="price-info">
                        <h3>15 990 ₽</h3>
                        <p class="dollar-price">~147,18 $</p>
                    </div>
                    <p>Этот светлый деревянный стул, вдохновленный швейцарской архитектурой и скандинавским минимализмом.</p>
                </div>
                <button class="btn_add_basket" data-product='{"name": "Ӧ-18", "price": 15990, "image": "media/Product Card-2.png"}'>
                    <h3>В корзину</h3>
                    <img src="icons/plus-solid.svg">
                </button>
            </div>
        </div>
    </div>
</div>

<div id="modal10" class="modal">
    <div class="modal-content">
        <div class="model-name">
            <span class="close"><img src="icons/Collection Arrow-Gray.svg"></span>
            <h1>Ӧ-04</h1>
        </div>
        <div class="main_modal_block">
            <div class="left_modal_block">
                <div class="prew_cardz">
                    <img src="media/Product Card-3.png" height="440px" width="440px">
                </div>
            </div>
            <div class="right_modal_block">
                <div class="info_cardz">
                    <div class="info">
                        <div class="model">
                            <p class="p-disc-g">Модель:</p>
                            <p class="p-disc-b">ö-04</p>
                        </div>
                        <div class="sell">
                            <p class="p-disc-g">Цвет:</p>
                            <p class="p-disc-b">DARK</p>
                        </div>
                    </div>
                    <div class="line-space"></div>
                    <div class="price-info">
                        <h3>15 990 ₽</h3>
                        <p class="dollar-price">~147,18 $</p>
                    </div>
                    <p>Этот темный деревянный стул, вдохновленный швейцарской архитектурой и скандинавским минимализмом.</p>
                </div>
                <button class="btn_add_basket" data-product='{"name": "Ӧ-04", "price": 15990, "image": "media/Product Card-3.png"}'>
                    <h3>В корзину</h3>
                    <img src="icons/plus-solid.svg">
                </button>
            </div>
        </div>
    </div>
</div>
    </main>

    <footer>
                <div class="footer-content">
                    <img src="icons/bigLogo.svg">
                    <p><a href="https://www.instagram.com/overdosekid">Михаил</a> (Designer, Developer)<br><a href="#">Андрей</a> (Developer)<br>Вячеслав (Prosto respect)</p>
                </div>
    </footer>

    <script src="script.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
</body>
</html>