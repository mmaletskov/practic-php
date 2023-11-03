<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sql_practic";

// Подключение к базе данных
$conn = new mysqli($servername, $username, $password, $dbname);

// Проверка подключения
if ($conn->connect_error) {
    die("Ошибка подключения: " . $conn->connect_error);
}
?>