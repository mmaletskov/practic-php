<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="./css/reset.css">
    <link rel="stylesheet" href="./css/style.css">
    <title>классы и объекты</title>
</head>
<body>
<!-- Создание класса на PHP-->

<?php
    class Animal {
        public $weight,$age,$color;
    }
    class Lion extends Animal{
        public $canine_length;
        function do(){
            echo "<h2>Описание: Льва</h2><br>"."<h3>".$this->canine_length." - длина клыка</h3><br>"."<h3>".$this->weight ." - вес</h3><br>" ."<h3>".$this->age ." - возраст</h3><br>"."<h3>".$this->color ." - окрас</h3><br>";
        }
    }
    class Rabbit extends Animal{
        public $ear_length;
        function do(){
            echo "<h2>Описание: Кролика</h2><br>"."<h3>".$this->ear_length." -длина ушей</h3><br>"."<h3>".$this->weight ." - вес</h3><br>"."<h3>". $this->age ." - возраст</h3><br>"."<h3>".$this->color ." - окрас</h3><br>";
        }
    }
    class Wolf extends Animal{
        public $tail_length;
        function do(){
            echo "<h2>Описание: Волка</h2><br>"."<h3>".$this->tail_length." -длина хвоста</h3><br>"."<h3>".$this->weight ." - вес</h3><br>"."<h3>". $this->age ." - возраст</h3><br>"."<h3>".$this->color ." - окрас</h3><br>";
        }
    }


    $lion = new Lion();
    $lion->canine_length = "10см";
    $lion->weight = "100";
    $lion->age = "10";
    $lion->color = "orange";
    $weightLion = $lion->weight;
    $ageLion = $lion->age;
    $colorLion = $lion->color;
    $lion->do();  
    
    echo "<br>";
    
    $rabbit = new Rabbit();
    $rabbit->ear_length = "15см";
    $rabbit->weight = "5";
    $rabbit->age = "6";
    $rabbit->color = "gray";
    $weightRabbit = $rabbit->weight;
    $ageRabbit = $rabbit->age;
    $colorRabbit = $rabbit->color;
    $rabbit->do();  
    
    echo "<br>";
      
    $wolf = new Wolf();
    $wolf->tail_length = "15см";
    $wolf->weight = "5";
    $wolf->age = "6";
    $wolf->color = "gray";
    $weightWolf = $wolf->weight;
    $ageWolf = $wolf->age;
    $colorWolf = $wolf->color;
    $wolf->do();  

    
?>
</body>
</html>