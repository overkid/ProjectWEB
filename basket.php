
 <?php

require_once 'config.php'; // Файл с настройками подключения к БД

// Обработка оформления заказа
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['place_order'])) {
    $name = trim($_POST['name']);
    $email = trim($_POST['email']);
    $phone = trim($_POST['phone']);
    $address = trim($_POST['address']);
    $cart = json_decode($_POST['cart_items'], true);
    $total = (float)$_POST['total_price'];
    
    // Валидация данных
    $errors = [];
    if (empty($name)) $errors[] = 'Укажите ваше имя';
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) $errors[] = 'Укажите корректный email';
    if (empty($phone)) $errors[] = 'Укажите телефон';
    if (empty($address)) $errors[] = 'Укажите адрес доставки';
    if (empty($cart)) $errors[] = 'Корзина пуста';
    
    if (empty($errors)) {
        try {
            $pdo = new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME, DB_USER, DB_PASS);

            
            $stmt = $pdo->prepare("INSERT INTO orders (customer_name, customer_email, customer_phone, customer_address, order_items, total_price) VALUES (?, ?, ?, ?, ?, ?)");
            $stmt->execute([
                $name,
                $email,
                $phone,
                $address,
                json_encode($cart, JSON_UNESCAPED_UNICODE),
                $total
            ]);
            
            echo '<script>localStorage.removeItem("cart");</script>';
            
            header('Location: thank_you.php?order_id='.$pdo->lastInsertId());
            exit;
        } catch (PDOException $e) {
            $error = 'Ошибка при оформлении заказа: ' . $e->getMessage();
        }
    }
}
$cart = isset($_COOKIE['cart']) ? json_decode($_COOKIE['cart'], true) : [];
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
    <link rel="stylesheet" href="basket.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
    <script src="https://unpkg.com/split-type"></script>
    <link rel="icon" href="/favicon.ico">
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
    

    <section class="basket-section">
        <h1>Ваша корзина</h1>
        
        <div class="basket-empty" style="display: none;">
            <p>Ваша корзина пуста</p>
            <a href="main.php" class="continue-shopping">Вернуться в каталог</a>
        </div>
        
        <div class="basket-content">
            <div class="basket-items">
            </div>

            <div class="basket-summary">
             <div class="basket-control">
                    <button class="clear-cart secondary-button">Очистить корзину</button>
                    <div class="total">
                        <p class="total-label">Итого:</p>
                        <p class="total-price">0 ₽</p>
                    </div>
                </div>
                <a href="#" class="checkout-button">Оформить заказ</a>
                <a href="main.php" class="continue-shopping">Продолжить покупки</a>
            </div>
        </div>
    </section>
<div id="orderModal" class="modal">
  <div class="modal-content">
    <span class="close-modal">&times;</span>
    <h2>Оформление заказа</h2>
    <form id="order-form" method="POST" class="order-form">
                    <h3>Данные для доставки</h3>
                    
                    <?php if (!empty($errors)): ?>
                        <div class="errors">
                            <?php foreach ($errors as $error): ?>
                                <p><?= htmlspecialchars($error) ?></p>
                            <?php endforeach; ?>
                        </div>
                    <?php endif; ?>
                    
                    <div class="form-group">
                        <label for="name">ФИО*</label>
                        <input type="text" id="name" name="name" required>
                    </div>
                    
                    <div class="form-group">
                        <label for="email">Email*</label>
                        <input type="email" id="email" name="email" required>
                    </div>
                    
                    <div class="form-group">
                        <label for="phone">Телефон*</label>
                        <input type="tel" id="phone" name="phone" required>
                    </div>
                    
                    <div class="form-group">
                        <label for="address">Адрес доставки*</label>
                        <textarea id="address" name="address" rows="3" required></textarea>
                    </div>
                    
                    <div class="form-group">
                        <label for="comment">Комментарий к заказу</label>
                        <textarea id="comment" name="comment" rows="2"></textarea>
                    </div>
                    
                    <input type="hidden" name="cart_items" id="cart-items">
                    <input type="hidden" name="total_price" id="total-price">
                    
                    <button type="submit" name="place_order" class="checkout-button primary-button">Подтвердить заказ</button>
                </form>
  </div>
</div>
    <footer>
        <div class="footer-content">
            <img src="icons/bigLogo.svg">
            <p><a href="https://www.instagram.com/overdosekid">Михаил</a> (Designer, Developer)<br><a href="#">Андрей</a> (Developer)<br>Вячеслав (Prosto respect)</p>
        </div>
    </footer>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            
            document.getElementById('order-form').addEventListener('submit', function(e) {
                const cart = JSON.parse(localStorage.getItem('cart')) || [];
                const total = parseFloat(document.querySelector('.total-price').textContent.replace(/\D/g, ''));
                
                document.getElementById('cart-items').value = JSON.stringify(cart);
                document.getElementById('total-price').value = total;
                
                if (cart.length === 0) {
                    e.preventDefault();
                    alert('Ваша корзина пуста!');
                }
            });
            
        });
    </script>
    <script>document.addEventListener('DOMContentLoaded', function() {
    const checkoutBtn = document.querySelector('.checkout-button');
    const modal = document.getElementById('orderModal');
    const closeBtn = document.querySelector('.close-modal');
    const orderForm = document.getElementById('orderForm');
    
    checkoutBtn.addEventListener('click', function(e) {
      e.preventDefault();
      
      const cart = JSON.parse(localStorage.getItem('cart')) || [];
      if (cart.length === 0) {
        alert('Ваша корзина пуста!');
        return;
      }
      
      modal.style.display = 'block';
    });
    
    closeBtn.addEventListener('click', function() {
      modal.style.display = 'none';
    });
    
    window.addEventListener('click', function(e) {
      if (e.target === modal) {
        modal.style.display = 'none';
      }
    });
    
    orderForm.addEventListener('submit', function(e) {
      e.preventDefault();
      
      const formData = {
        name: document.getElementById('orderName').value,
        phone: document.getElementById('orderPhone').value,
        address: document.getElementById('orderAddress').value,
        cart: JSON.parse(localStorage.getItem('cart')) || []
      };
      
      console.log('Данные заказа:', formData);
      
      modal.style.display = 'none';
      localStorage.removeItem("cart");
      
    });
    });
;</script>
    <script src="script.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
</body>
</html>