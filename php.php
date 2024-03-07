<?php
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

// Получение данных из формы регистрации
$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];

// Хэширование пароля
$hashed_password = password_hash($password, PASSWORD_DEFAULT);

// Подготовка и выполнение запроса к базе данных для вставки данных
$sql = "INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$hashed_password')";

if ($conn->query($sql) === TRUE) {
    echo "Rejestracja zakończyła się pomyślnie!";
    echo "<br><a href='login.html'>Wróć do strony logowania</a>";
} else {
    echo "Błąd podczas rejestracji: " . $conn->error;
}

// Закрытие подключения к базе данных
$conn->close();
?>
