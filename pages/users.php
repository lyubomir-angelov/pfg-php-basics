<?php
include_once '../includes/common.php';
include_once '../includes/functions.php';

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
        
        <h2>Потребители</h2>
        
        <ul>
        <?php foreach (getAllUsers() as $user):?>
        <li><a href="./view-user.php?id=<?php echo $user['id']; ?>"><?php echo $user['username'];?></a></li>
        <?php endforeach;?>
        </ul>  
    </body> 
</html>


