<?php
include_once './includes/common.php';
include_once './includes/functions.php';
//var_dump($_SESSION);
?>
<!DOCTYPE html>   
<html> 
    <head> 
        <meta http-equiv="content-type" content="text/html;charset=utf-8" /> 
        <title>Хотели</title> 
    </head>   
    <body>
        <h1>ЛОГО</h1>
        <ul>
            <li><a href="./index.php">Начало</a></li>
            <li><a href="./pages/hotels.php">Хотели</a></li>
            <li><a href="./pages/users.php">Потребители</a></li>
            
            <?php if (isset($_SESSION['isLoggedIn']) && $_SESSION['isLoggedIn'] == true): ?>
            
            <li>Welcome <strong><?php echo $_SESSION['user']['username']; ?></strong></li>
            <li><a href="./pages/logout.php">Изход</a></li>
            
            <?php else: ?>
            
            <li><a href="./pages/login.php">Вход</a></li>
            <li><a href="./pages/register.php">Регистрация</a></li>
            
            <?php endif;?>
        </ul>  
        
        <hr/>
        
        <h2>Новите хотели</h2>
        
        <?php //TODO: List newest hotels
              //FIXME: something
        ?>
        <ul>
        <?php foreach (getAllHotels() as $hotel):?>
        <li><a href=""><?php echo $hotel['name'];?></a></li>
        <?php endforeach;?>
        </ul>  
    </body> 
</html>

