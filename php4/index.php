<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
class Car {
    public function __construct() {
        echo "Это машина\n";
    }
}

class CarInLibrary {
    public function __construct() {
        echo "Это машина в библиотеке\n";
    }
}

// Создание объекта класса Car
$car = new Car(); // Выведет "Это машина"

// Создание объекта класса CarInLibrary
$carInLibrary = new CarInLibrary(); // Выведет "Это машина в библиотеке"
?>
</body>
</html>