<?php
include_once '../includes/common.php';
include_once '../includes/functions.php';

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
            <li><a href="../index.php">Начало</a></li>
            <li><a href="./hotels.php">Хотели</a></li>
            <li><a href="./users.php">Потребители</a></li>
            
            <?php if (isset($_SESSION['isLoggedIn']) && $_SESSION['isLoggedIn'] == true): ?>
            
            <li>Welcome <strong><?php echo $_SESSION['user']['username']; ?></strong></li>
            <li><a href="./logout.php">Изход</a></li>
            
            <?php else: ?>
            
            <li><a href="./login.php">Вход</a></li>
            <li><a href="./register.php">Регистрация</a></li>
            
            <?php endif;?>
        </ul>  
        
        <hr/>
        
        <h2>Xотели</h2>
        
        <ul>
        <?php foreach (getAllHotels() as $hotel):?>
        <li><a href=""><?php echo $hotel['name'];?></a></li>
        <?php endforeach;?>
        </ul>  
    </body> 
</html>


