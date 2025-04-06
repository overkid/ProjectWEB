<?php
// Подключение к базе данных
$host = 'MySQL-8.2';
$dbname = 'hove';
$username = 'root';
$password = '';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Ошибка подключения к базе данных: " . $e->getMessage());
}

// Получение товаров из базы данных
$stmt = $pdo->query("SELECT * FROM products");
$products = $stmt->fetchAll(PDO::FETCH_ASSOC);
$productCount = count($products);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hove - Каталог</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="catalog.css">
</head>
<body>
<div id="preloader">
        <video src="media/loading.mp4" autoplay loop muted playsinline></video>
    </div>
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
    <main>

    <section class="ctlg">
        <div class="container-ctlg">
            <div class="zzz">
                <h1>Каталог</h1>
                <p class="p-disc-g">Товаров: <?php echo $productCount; ?></p>
            </div>
            <div class="cards-ctlg">
            <?php foreach ($products as $index => $product): ?>
                <div class="cardz" data-modal="modal<?php echo $index + 1; ?>" 
     style="background-image: url('<?php echo htmlspecialchars($product['image_path']); ?>')">
     <div class="card-disc">
        <p><?php echo htmlspecialchars($product['model']); ?></p>
        <p><?php echo htmlspecialchars($product['color']); ?></p>
    </div>
    <div class="price">
        <h3><?php echo number_format($product['price'], 0, '.', ' '); ?> ₽</h3>
    </div>
</div>
<?php endforeach; ?>

                <div class="mailing">
                    <div class="mailing-content">
                        <h3>Будь в курсе<br><span>появления новинок.</span></h3>
                        <div id="message" style="margin-top: 10px; color: green;"></div>
                        <form class="mail-input" id="subscribe-form">
                            <div class="mail-img-input">
                                <img src="icons/mail.svg">
                                <input class="mail" type="email" name="email" placeholder="youremail@mail.com">
                            </div>
                            <button type="submit"><img src="icons/Collection Arrow.svg"></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php foreach ($products as $index => $product): ?>
    <div id="modal<?php echo $index + 1; ?>" class="modal">
        <div class="modal-content">
            <div class="model-name">
                <span class="close"><img src="icons/Collection Arrow-Gray.svg"></span>
                <h1><?php echo htmlspecialchars($product['model']); ?></h1>
            </div>
            <div class="main_modal_block">
                <div class="left_modal_block">
                    <div class="prew_cardz">
                        <img src="<?php echo htmlspecialchars($product['image_path']); ?>" height="440px" width="440px">
                    </div>
                </div>
                <div class="right_modal_block">
                    <div class="info_cardz">
                        <div class="info">
                            <div class="model">
                                <p class="p-disc-g">Модель:</p>
                                <p class="p-disc-b"><?php echo htmlspecialchars($product['model']); ?></p>
                            </div>
                            <div class="sell">
                                <p class="p-disc-g">Цвет:</p>
                                <p class="p-disc-b"><?php echo strtoupper(htmlspecialchars($product['color'])); ?></p>
                            </div>
                        </div>
                        <div class="line-space"></div>
                        <div class="price-info">
                            <h3><?php echo number_format($product['price'], 0, '.', ' '); ?> ₽</h3>
                            <p class="dollar-price">~<?php echo number_format($product['price'] / 75, 2, '.', ''); ?> $</p>
                        </div>
                        <p><?php echo htmlspecialchars($product['description']); ?></p>
                    </div>
                    <button class="btn_add_basket" data-product='<?php 
                        echo json_encode([
                            'name' => $product['model'],
                            'price' => $product['price'],
                            'image' => $product['image_path']
                        ], JSON_HEX_APOS | JSON_HEX_QUOT); 
                    ?>'>
                        <h3>В корзину</h3>
                        <img src="icons/plus-solid.svg">
                    </button>
                </div>
            </div>
        </div>
    </div>
    <?php endforeach; ?>
    </main>

    <footer>
        <div class="footer-content">
            <img src="icons/bigLogo.svg">
            <p><a href="https://www.instagram.com/overdosekid">Михаил</a> (Designer, Developer)<br><a href="#">Андрей</a> (Developer)<br>Вячеслав (Prosto respect)</p>
        </div>
    </footer>

    <script src="script.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
</body>
</html>