<?php
include_once '../includes/common.php';
include_once '../includes/functions.php';

$userdetail = getUser($_GET['id']);

?>
<!DOCTYPE html>   
<html> 
    <head> 
        <meta http-equiv="content-type" content="text/html;charset=utf-8" /> 
        <title>Потребители</title> 
    </head>   
    <body>
        <h1>ЛОГО</h1>
        <?php echo getMenu('.') ?> 
        
        <hr/>
        
        <h2>ИМЕ НА ПОТРЕБИТЕЛ <?php echo $userdetail ['username']; ?></h2>
        <span>ЕМАЙЛ НА ПОТРЕБИТЕЛ <?php echo $userdetail ['email']; ?></span>
        <p>ПОЛ НА ПОТРЕБИТЕЛЯ <?php echo $userdetail ['gender']; ?></p>
    </body> 
</html>


