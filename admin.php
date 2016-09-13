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
        <h2>Администрация на Xотели</h2>
        <?php if (isset($_SESSION['deletedSuccessful']) && $_SESSION['deletedSuccessful'] == true) {
        echo 'deletedhotel' ;
        } ?>
	    <table>
	    <?php foreach (getAllHotels() as $hotel):?>
	    <tr>
		<td><a href="./pages/view-hotel.php?id=<?php echo $hotel['id'];?>"><?php echo $hotel['name'];?></a></td>
		<td><a href="./pages/view-hotel.php?id=<?php echo $hotel['id'];?>">edit</a> | <a href="./pages/delete-hotel.php?id=<?php echo $hotel['id'];?>">delete</a></td>
		</tr>
		<?php endforeach;?>
	    </table>   
    </body> 
</html>




