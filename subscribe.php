<?php
header('Content-Type: text/plain');
$host = "MySQL-8.2";
$user = "root";
$password = "";
$database = "hove";

$conn = new mysqli($host, $user, $password, $database);

if ($conn->connect_error) {
    die("Ошибка подключения к базе данных.");
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = trim($_POST["email"]);

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        die("Некорректный email!");
    }

    $email = $conn->real_escape_string($email);
    $check_sql = "SELECT * FROM subscribers WHERE email = '$email'";
    $result = $conn->query($check_sql);

    if ($result->num_rows > 0) {
        echo "Этот email уже подписан!";
    } else {
        $insert_sql = "INSERT INTO subscribers (email) VALUES ('$email')";
        if ($conn->query($insert_sql)) {
            echo "Спасибо за подписку!";
        } else {
            echo "Ошибка: " . $conn->error;
        }
    }
}

$conn->close();
?>