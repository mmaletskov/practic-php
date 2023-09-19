<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/style.css">
    <title>sm2</title>
</head>
<body>
    <?php
    $name = $_POST['name'];
    $email = $_POST['email'];
    $tel = $_POST['tel'];
  
    function validation_form($name,$email,$tel){
        if(empty($name)){
            $err ='<h2>Заполните поле с именем</h2>';
            return $err;
        }
        $how = iconv_strlen($name);
        if($how <= 1){
            $err = '<h2>имя не может быть меньше одного</h2>';
            return $err;
        }
        if(empty($email)){
            $err ='<h2>Заполните поле с email</h2>';
            return $err;
        }
        $how_email = iconv_strlen($email);
        if($how_email < 10){
            $err = '<h2>почта не должна быть меньше 10 символов</h2>';
            return $err;
        }
        if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
            $err = '<h2>неверный формат почты</h2>';
            return $err;
        }
        if(empty($tel)){
            $err ='<h2>Заполните поле с номером телефона</h2>';
            return $err;
        }
        $how_tel = iconv_strlen($tel);
        if($how_tel < 11){
            $err = '<h2>номер телефона не может быть меньше 11 символов</h2>';
            return $err;
        }
        if(empty($err)){
            $err = '<h2>Все хорошо</h2>';
            return $err;
        }
    }

    
    ?>

    <form name="form" method="POST" class="form">
        <?php 
        echo validation_form($name,$email,$tel);
        ?>
        <input type="text" name="name" value="<?=$_POST['name']?>">
        <input type="text" name="email" value="<?=$_POST['email']?>">
        <input type="tel" name="tel" value="<?=$_POST['tel']?>">
        
        <input type="submit" name="form">
        
    </form>

</body>
</html>