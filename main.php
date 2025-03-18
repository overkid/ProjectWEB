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
            <img src="icons/Logo.svg">
        </div>
         <div class="hud">
            <a href="index.html" class="link">Главная</a>
            <a href="main.php" class="link">Каталог</a>
            <a href="contacts.php" class="link">Контакты</a>
         </div>
         <div class="basket">
            <!-- <img class = "moon-icon" src = "icons/moon.svg"> -->
            <a href="#" class="link link-basket">Корзина(0)</a>
         </div>
    </div>
    <main>

    <section class="ctlg">
                <div class="container-ctlg">
                <div class="zzz">
                            <p>Каталог.</p>
                        </div>
                        <div>
                </div>
                    <div class="cards-ctlg">

                        <div class="cardz">
                            <div class="card-disc">
                                <p>ö-15</p>
                                <p>light</p>
                            </div>
                            <div class="price">
                                <p>12 990 ₽</p>
                            </div>

                        </div>
                        <button id="openModalBtn">
                        <div class="cardz">
                            <div class="card-disc">
                                <p>ö-02</p>
                                <p>dark</p>

                            </div>
                            <div class="price">
                                <p>15 990 ₽</p>
                            </div>
                        </div>
                        </button>
                        <div class="cardz">
                            <div class="card-disc">
                                <p>ö-18</p>
                                <p>light</p>
                            </div>
                            <div class="price">
                                <p>13 490 ₽</p>
                            </div>

                        </div>
                        <div class="cardz">
                            <div class="card-disc">
                                <p>ö-04</p>
                                <p>dark</p>
                            </div>
                            <div class="price">
                                <p>15 990 ₽</p>
                            </div>

                        </div>
                        <div class="cardz">
                            <div class="card-disc">
                                <p>ö-15</p>
                                <p>light</p>
                            </div>
                            <div class="price">
                                <p>15 990 ₽</p>
                            </div>

                        </div>
                        <div class="cardz">
                            <div class="card-disc">
                                <p>ö-15</p>
                                <p>light</p>
                            </div>
                            <div class="price">
                                <p>15 990 ₽</p>
                            </div>

                        </div>
                        <div class="cardz">
                            <div class="card-disc">
                                <p>ö-15</p>
                                <p>light</p>
                            </div>
                            <div class="price">
                                <p>15 990 ₽</p>
                            </div>

                        </div>
                        <div class="cardz">
                            <div class="card-disc">
                                <p>ö-02</p>
                                <p>dark</p>
                            </div>
                            <div class="price">
                                <p>15 990 ₽</p>
                            </div>

                        </div>
                        <div class="cardz">
                            <div class="card-disc">
                                <p>ö-18</p>
                                <p>light</p>
                            </div>
                            <div class="price">
                                <p>15 990 ₽</p>
                            </div>

                        </div>
                        <div class="cardz">
                            <div class="card-disc">
                                <p>ö-04</p>
                                <p>dark</p>
                            </div>
                            <div class="price">
                                <p>15 990 ₽</p>
                            </div>
                        </div>
                    </div>
                </div>

            </section>
    </main>

        <button id="openModalBtn" class="btn">nvn</button>
        <div id="myModal" class="modal">
             <div class="modal-content">
             <span class="close"><img src="icons/Collection Arrow-Gray.svg"></span>
             <h1>Ӧ-02</h1>
                <div class="main_modal_block">
                    <div class="left_modal_block">
                        <div class="prew_cardz">
                        <img src="media/Product Card.png" height="440px" width="440px">
                        </div>

                   
                 </div>
                 <div class="right_modal_block">
                    <div class="info_cardz">
                        <div class="model">
                            <p>Модель:</p>
                            <p class="model-modal">ö-02</p>
                        </div>
                        <div class="sell">
                            <p>Цвет:</p>
                            <p class="model-modal">LIGHT</p>
                        </div>
                        <div class="line-space"></div>

                        <h3>15 990 ₽</h3>
                        <p>Этот светлый деревянный стул, вдохновленный швейцарской архитектурой и скандинавским минимализмом.</p>
                    </div>
                    <div class="btn_add_basket">
                        <h3>В корзину</h3>
                        <!-- <img src="icons/plus-solid.svg"> -->
                    </div>
                 </div>
                </div>
             </div>
        </div>

<script src="script.js"></script> 

    <footer>
                <div class="footer-content">
                    <img src="icons/bigLogo.svg">
                    <p>Concept by <a href="#">Михаил</a>, <a href="#">Андрей</a>, <a href="#">Вячеслав</a></p>
                </div>
            </footer>
            
<script src="script.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>


</body>
</html>
