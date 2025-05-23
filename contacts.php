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
</head>
<body>
<div class="nav">
        <div class="logo">
            <a href="index.html"><img src="icons/Logo.svg"></a>
        </div>
        <div class="hud">
            <a href="index.html" class="link">Главная</a>
            <a href="main.php" class="link">Каталог</a>
            <a href="contacts.php" class="link">Контакты</a>
         </div>
         <div class="basket">
            <a href="basket.php" class="link link-basket">Корзина (<span class="goods">0</span>)</a>
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

    <script src="script.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>

</body>
</html>
