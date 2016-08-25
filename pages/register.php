<?php
include_once '../includes/common.php';
include_once '../includes/functions.php';

if (isset($_POST['submit']) && $_POST['submit'] == 'Register') {
    
    registerUser();
    
    // If user is successfully registered
    if ($_SESSION['isRegistered'] == true) {
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
        <?php echo getMenu('.'); ?>  
        
        <hr/>
        
        <h2>Регистрация</h2>
        
        <form action="" method="post" enctype="multipart/form-data">
            Username:
            <input type="text" name="username" value="" placeholder="Enter username"/>
            <?php if (!empty($_SESSION['registerErrors']['username'])): ?>
                <span style="color:red"><?php echo $_SESSION['registerErrors']['username']; ?></span>
            <?php endif;?>
            <br/>
            Email:
            <input type="text" name="email" value="" placeholder="Enter email"/>
            <?php if (!empty($_SESSION['registerErrors']['email'])): ?>
                <span style="color:red"><?php echo $_SESSION['registerErrors']['email']; ?></span>
            <?php endif;?>
            <br/>
            Password: 
            <input type="password" name="password" value="" placeholder="Enter password"/>
            <?php if (!empty($_SESSION['registerErrors']['password'])): ?>
                <span style="color:red"><?php echo $_SESSION['registerErrors']['password']; ?></span>
            <?php endif;?>
            <br/>
            <label>
                male <input type="radio" name="gender" value="male" />
                female <input type="radio" name="gender" value="female" />
            </label>
            
            <br/>
            <input type="submit" name="submit" value="Register" />
        </form>
        
    </body> 
</html>

