<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <title>Document</title>
</head>
<body>
<?php
    include('Car/car.php');
    include('lib/car.php');

    $n = new \Car\classes\car('Это машина');
    $ne = new \lib\classes\car('Эта машина в библиотеке');
?>

<p><?=$n->name?></p>
<p><?=$ne->name?></p>
</body>
</html>