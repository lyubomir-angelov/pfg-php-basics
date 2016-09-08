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
        
        <h2>Новите потребители</h2>
        
        <?php //TODO: List newest hotels
              //FIXME: something
        ?>
        <ul>
        <?php foreach (getNewUsers() as $newuser):?>
        <li><a href="./pages/view-user.php?id=<?php echo $newuser['id']; ?>"><?php echo $newuser['username'];?></a></li>
        <?php endforeach;?>
        </ul>  

        <ul>
        <?php foreach (getCategory() as $cat):?>
        <li><?php echo $cat ['title'] ;?></li>
        <?php endforeach;?>
        </ul>  
    </body> 
</html>

