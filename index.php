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
        <?php echo getMenu('./pages') ?>
        
        <hr/>
        
        <h2>Новите хотели</h2>
        
        <?php //TODO: List newest hotels
              //FIXME: something
        ?>
        <ul>
        <?php foreach (getNewestHotels() as $newesthotels):?>
        <li><a href="./pages/view-hotel.php?id=<?php echo $newesthotels['id']; ?>"><?php echo $newesthotels['name'] . ' </a> ' . $newesthotels['stars'];?></li>
        <?php endforeach;?>
        </ul>  
    </body> 
</html>

