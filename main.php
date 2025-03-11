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

                    <div class="cards-ctlg">

                        <div class="card">
                            <div class="card-disc">
                                <p>ö-15</p>
                                <p>light</p>
                            </div>
                            <div class="price">
                                <p>12 990 ₽</p>
                            </div>

                        </div>
                        <button id="openModalBtn">
                        <div class="card">
                            <div class="card-disc">
                                <p>ö-02</p>
                                <p>dark</p>

                            </div>
                            <div class="price">
                                <p>15 990 ₽</p>
                            </div>
                        </div>
                        </button>
                        <div class="card">
                            <div class="card-disc">
                                <p>ö-18</p>
                                <p>light</p>
                            </div>
                            <div class="price">
                                <p>13 490 ₽</p>
                            </div>

                        </div>
                        <div class="card">
                            <div class="card-disc">
                                <p>ö-04</p>
                                <p>dark</p>
                            </div>
                            <div class="price">
                                <p>15 990 ₽</p>
                            </div>

                        </div>
                        <div class="card">
                            <div class="card-disc">
                                <p>ö-15</p>
                                <p>light</p>
                            </div>
                            <div class="price">
                                <p>15 990 ₽</p>
                            </div>

                        </div>
                        <div class="card">
                            <div class="card-disc">
                                <p>ö-15</p>
                                <p>light</p>
                            </div>
                            <div class="price">
                                <p>15 990 ₽</p>
                            </div>

                        </div>
                        <div class="card">
                            <div class="card-disc">
                                <p>ö-15</p>
                                <p>light</p>
                            </div>
                            <div class="price">
                                <p>15 990 ₽</p>
                            </div>

                        </div>
                        <div class="card">
                            <div class="card-disc">
                                <p>ö-02</p>
                                <p>dark</p>
                            </div>
                            <div class="price">
                                <p>15 990 ₽</p>
                            </div>

                        </div>
                        <div class="card">
                            <div class="card-disc">
                                <p>ö-18</p>
                                <p>light</p>
                            </div>
                            <div class="price">
                                <p>15 990 ₽</p>
                            </div>

                        </div>
                        <div class="card">
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
                 <span class="close">&times;</span>
                  <h1>ö-02</h1>
                  <img src="media/Product Card.png">
                  <p>Этот светлый деревянный стул, вдохновленный швейцарской архитектурой и скандинавским минимализмом.</p>
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
