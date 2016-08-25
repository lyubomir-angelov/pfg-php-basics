<?php
include_once '../includes/common.php';
include_once '../includes/functions.php';

if (isset($_POST['submit']) && $_POST['submit'] == 'Login') {
    
    loginUser();
    
    // If user is successfully registered
    if ($_SESSION['isLoggedIn'] == true) {
        // Redirect user back to index.php (homepage) URL
        header('Location: ../index.php');
        exit;
    } 
}

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
            <li><a href="./pages/login.php" style="font-weight:bold;">Вход</a></li>
            <li><a href="./pages/register.php" >Регистрация</a></li>
        </ul>  
        
        <hr/>
        
        <h2>Вход</h2>
        
        <form action="" method="post" enctype="multipart/form-data">
            Username:
            <input type="text" name="username" value="" placeholder="Enter username"/>
            <br/>
            Password: 
            <input type="text" name="password" value="" placeholder="Enter password"/>
            <br/>
            <input type="checkbox" name="remember_me" value="yes" /> remember me?
        
            <br/>
            <input type="submit" name="submit" value="Login" />
        </form>
        
    </body> 
</html>

