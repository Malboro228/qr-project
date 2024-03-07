<?php
session_start();

// Подключение к базе данных MySQL
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "registration_db";

// Создание подключения
$conn = new mysqli($servername, $username, $password, $dbname);

// Проверка подключения
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Получение данных из формы входа
$login_username = $_POST['username'];
$login_password = $_POST['password'];

// Подготовка и выполнение запроса к базе данных для проверки аутентификации
$login_sql = "SELECT * FROM users WHERE username='$login_username'";
$login_result = $conn->query($login_sql);

if ($login_result->num_rows > 0) {
    // Получаем данные пользователя из результата запроса
    $user = $login_result->fetch_assoc();
    // Проверяем совпадение хэшей паролей
    if (password_verify($login_password, $user['password'])) {
        // Успешный вход - устанавливаем сессию
        $_SESSION['loggedin'] = true;
        // Перенаправляем пользователя на главную страницу после входа
        header("Location: dashboard.php");
        exit; // Важно использовать exit после перенаправления, чтобы прервать дальнейшее выполнение скрипта
    } else {
        echo "Nieprawidłowe hasło";
    }
} else {
    echo "Taki użytkownik nie istnieje";
}

// Закрытие подключения к базе данных
$conn->close();
?>
