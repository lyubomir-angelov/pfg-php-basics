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
        <?php echo getMenu('.'); ?>

        
        <hr/>
        
        <h2>Xотели</h2>
        
        <ul>
        <?php foreach (getAllHotels() as $hotel):?>
        <li><a href="./view-hotel.php?id=<?php echo $hotel['id'];?>"><?php echo $hotel['name'];?></a></li>
        <?php endforeach;?>
        </ul>  
    </body> 
</html>


