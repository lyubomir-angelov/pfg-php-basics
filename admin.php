<?php
include_once './includes/common.php';
include_once './includes/functions.php';

/*
echo date('Y-m-d H:i:s');
die;
*/

?>
<!DOCTYPE html>   
<html> 
    <head> 
        <meta http-equiv="content-type" content="text/html;charset=utf-8" /> 
        <title>Администрация</title> 
    </head>   
    <body>
        <h1>Dashboard</h1>
        
        <?php echo getAdminMenu('./pages'); ?>
        
        <hr/>
        
        
    </body> 
</html>


