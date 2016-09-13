<?php
include_once '../includes/common.php';
include_once '../includes/functions.php';


if (isset($_POST['submit'])) {
    
    addHotel();
    
    // If user is successfully registered
    if ($_SESSION['isSuccess'] == true) {
        // Redirect user back to index.php (homepage) URL
        header('Location: ../admin.php');
        exit;
    }
}

?>
<!DOCTYPE html>   
<html> 
    <head> 
        <meta http-equiv="content-type" content="text/html;charset=utf-8" /> 
        <title>Добави Хотел</title> 
    </head>   
    <body>
        <h1>Добави Xотел</h1>
        
        <?php echo getAdminMenu('.'); ?> 
        
        <hr/>

        <form action="" method="post" enctype="multipart/form-data">
            <div>
                <label>Име:</label><br/>
                <input type="text" name="name" value="" />
            </div>
            <div>
                <label>Описание:</label><br/>
                <textarea rows="5" cols="20" name="description"></textarea>
            </div>
            <div>
                <label>Stars:</label><br/>
                <select name="stars">
                    <option value="1 Star">1 Star</option>
                    <option value="2 Stars">2 Stars</option>
                    <option value="3 Stars">3 Stars</option>
                    <option value="4 Stars">4 Stars</option>
                    <option value="5 Stars">5 Stars</option>
                </select>
            </div>
            
            <div>
                <label>Status:</label><br/>
                <select name="status">
                    <option value="active">Active</option>
                    <option value="inactive">Inactive</option>
                </select>
            </div>
        <br/>
            <input type="submit" name="submit" value="Запази" />
        </form>
        
    </body> 
</html>

