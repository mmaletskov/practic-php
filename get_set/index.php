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
class Cookie {
    private $type;

    public function setType($type) {
        $availableTypes = array("Шоколадное", "Овсяное", "Сливочное", "Имбирное", "Пряничное");
        if (in_array($type, $availableTypes)) {
            $this->type = $type;
        } else {
            echo "Недопустимый вид печенья\n";
        }
    }

    public function getType() {
        return $this->type;
    }
}

$cookie = new Cookie();

?>
<h3 class="tt">Печенье</h3>
<p class="title">
    <?=$cookie->setType("Шоколадное");
        echo $cookie->getType(); // Выведет "Шоколадное"
    ?>
</p>

<p class="title">
    <?=$cookie->setType("Овсяное");
        echo $cookie->getType(); // Выведет "Овсяное"
    ?>
</p>

<p class="title err">
    <?=$cookie->setType("Ванильное"); // Выведет "Недопустимый вид печенья"
    ?>
</p>


</body>
</html>