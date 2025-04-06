<?php
require_once 'config.php';

$orderId = isset($_GET['order_id']) ? (int)$_GET['order_id'] : 0;

$order = null;
if ($orderId > 0) {
    try {
        $pdo = new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME, DB_USER, DB_PASS);
        $stmt = $pdo->prepare("SELECT * FROM orders WHERE id = ?");
        $stmt->execute([$orderId]);
        $order = $stmt->fetch(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
        die("Ошибка при получении данных заказа: " . $e->getMessage());
    }
}
?>
<!DOCTYPE html>
<html lang="ru">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>höve</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
    <script src="https://unpkg.com/split-type"></script>
    <link rel="icon" href="/favicon.ico">
    <title>Заказ оформлен - Hove</title>
</head>
<body>
<div class="nav">
        <div class="logo">
            <a href="index.html"><img src="icons/Logo.svg"></a>
        </div>
        <div class="hud">
            <a href="index.html" class="link" style="color:var(--black)">Главная</a>
            <a href="main.php" class="link">Каталог</a>
            <a href="contacts.php" class="link">Контакты</a>
         </div>
         <div class="basket">
            <a href="basket.php" class="link link-basket" style="color:var(--black)">Корзина (<span class="goods">0</span>)</a>
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

    <section class="thank-you-section">
        <?php if ($order): ?>
            <h1>Спасибо за ваш заказ!</h1>
            <p>Номер вашего заказа: <strong>#<?= $order['id'] ?></strong></p>
            <p>Мы свяжемся с вами в ближайшее время для подтверждения заказа.</p>
            
            <div class="order-summary">
                <h3>Детали заказа:</h3>
                <p>Имя: <?= htmlspecialchars($order['customer_name']) ?></p>
                <p>Email: <?= htmlspecialchars($order['customer_email']) ?></p>
                <p>Телефон: <?= htmlspecialchars($order['customer_phone']) ?></p>
                <p>Адрес: <?= htmlspecialchars($order['customer_address']) ?></p>
                <p>Сумма: <?= number_format($order['total_price'], 0, '.', ' ') ?> ₽</p>
            </div>
            
            <a href="main.php" class="continue-shopping">Вернуться в каталог</a>
        <?php else: ?>
            <h1>Заказ не найден</h1>
            <p>Возможно, произошла ошибка при обработке вашего заказа.</p>
            <p>Пожалуйста, свяжитесь с нашей службой поддержки.</p>
        <?php endif; ?>
    </section>

</body>
</html>