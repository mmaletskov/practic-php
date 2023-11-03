<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>
<body>
<?php
    include('connect.php');
    
    // Список категорий с количеством товаров
    $sql = "SELECT categories.name, COUNT(products.id) AS total_products
            FROM categories LEFT JOIN products ON categories.id = products.category_id
            GROUP BY categories.id";
    $result = $conn->query($sql);
    
    if ($result->num_rows > 0) {
        echo "<h2>Список категорий с количеством товаров:</h2>";
        echo "<ul>";
        while ($row = $result->fetch_assoc()) {
            echo "<li>" . $row['name'] . " (" . $row['total_products'] . " товаров)</li>";
        }
        echo "</ul>";
    } else {
        echo "Нет данных о категориях и товарах";
    }
    
    // Список товаров с наименованием категории
    $sql = "SELECT products.name, categories.name AS category
            FROM products LEFT JOIN categories ON products.category_id = categories.id";
    $result = $conn->query($sql);
    
    if ($result->num_rows > 0) {
        echo "<h2>Список товаров:</h2>";
        echo "<ul>";
        while ($row = $result->fetch_assoc()) {
            echo "<li>" . $row['name'] . " (" . $row['category'] . ")</li>";
        }
        echo "</ul>";
    } else {
        echo "Нет данных о товарах";
    }
    
    // Средняя стоимость товаров
    $sql = "SELECT AVG(price) AS average_price FROM products";
    $result = $conn->query($sql);
    
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        echo "<h2>Средняя стоимость товара: " . $row['average_price'] . "</h2>";
    } else {
        echo "Нет данных о товарах";
    }
    
    // Общий вес товаров
    $sql = "SELECT SUM(weight) AS total_weight FROM products";
    $result = $conn->query($sql);
    
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        echo "<h2>Общий вес товаров: " . $row['total_weight'] . "</h2>";
    } else {
        echo "Нет данных о товарах";
    }
    
    // Закрываем соединение с базой данных
    $conn->close();
    ?>
</body>
</html>