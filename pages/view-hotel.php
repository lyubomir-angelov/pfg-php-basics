<?php
include_once '../includes/common.php';
include_once '../includes/functions.php';

$hotel = getHotel($_GET['id']);
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
        
        <h2><?php echo $hotel['name'];?></h2>
        <span>HOTEL STARS</span>
        
        <p>HOTEL DESCRIPTION</p>
        
    </body> 
</html>


