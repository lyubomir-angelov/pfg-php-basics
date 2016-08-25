<?php
/**
 * Get All Hotels list
 * 
 * @return array
 */
function getAllHotels()
{    
    global $dbh;   
    
    $sql = "SELECT `id`, `name`, `status` FROM `hotels`;";
    $hotels = $dbh->query($sql, PDO::FETCH_ASSOC);

    return $hotels;
}
function getNewestHotels()
{
    global $dbh;   
    
    $sql = "SELECT `id`, `name`, `stars` FROM `hotels` WHERE `status` = 'active' ORDER BY `created_at` DESC LIMIT 3;";
    $newestHotels = $dbh->query($sql, PDO::FETCH_ASSOC);

    return $newestHotels;
}
/**
 * Get All Users list
 * 
 * @return array
 */
function getAllUsers()
{    
    global $dbh;   
    
    $sql = "SELECT `id`, `username`, `gender` FROM `users`;";
    $users = $dbh->query($sql, PDO::FETCH_ASSOC);

    return $users;
}
function getHotel($id)
{    
    global $dbh;   
    
    $sql = "SELECT `id`, `name`, `description`,`stars`FROM `hotels` WHERE `status` = 'active' AND `id` = " . $id . ";";

    $sth = $dbh->prepare($sql);
    $sth->execute();
    $hotel = $sth->fetch(PDO::FETCH_ASSOC);

    return $hotel;
}
/**
 * Register User
 * 
 * @return null
 */
function registerUser()
{
    global $dbh;
    
    // Record all errors if any
    $error = array();

    // User is not registered
    $_SESSION['isRegistered'] = false;

    // If form submited?
    if (isset($_POST['submit'])) {
        
        // If the username is empty, record an error
        if ( isset($_POST['username']) && $_POST['username'] == '') {
            $error['username'] = 'Please enter your username!';
        }
        
        // Check if the email is not empty and is valid email address
        if ( isset($_POST['email']) && !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
            $error['email'] = 'Please enter valid email address!';
        }
        
        if ( isset($_POST['password']) && strlen($_POST['password']) < 3 ) {
            $error['password'] = 'Please enter at least 3 characters for password!';
        }
        
        // If no errors, register the user
        if ( !count($error) ) {
            
            // Insert QUERY
            $insert = "INSERT INTO 
                        `users` (`username`, `email`, `password`, `gender`) 
                        VALUES 
                        (
                            '" . $_POST['username'] . "', '" . $_POST['email'] . "',
                            '" . $_POST['password'] . "', '" . $_POST['gender'] . "'
                        );";
            //var_dump($insert);
            //die;
            // Execute query in database
            $success = $dbh->exec($insert);
             
            // If success registration successful 
            if ($success) {
                $_SESSION['isRegistered'] = true;
            }
        }
        
    }
    // Save errors if any in the session
    $_SESSION['registerErrors'] = $error;
}

/**
 * Login User function
 * 
 * @return null
 */
function loginUser()
{
    global $dbh;
    
    // If the form is submited
    if (isset($_POST['submit'])) {
        // Set default user is not logged in
        $_SESSION['isLoggedIn'] = false;
        
        // Check if the fields are not empty
        if ( empty($_POST['username']) === FALSE && empty($_POST['password']) === FALSE ) {

            $select = "SELECT `id`, `username` FROM `users` WHERE `username` = " . $dbh->quote($_POST['username']) . " AND `password` = " . $dbh->quote($_POST['password']) . ";";
            //var_dump($select);
            //die;

            $sth = $dbh->prepare($select);
            $sth->execute();
            $result = $sth->fetch(PDO::FETCH_ASSOC);
            //var_dump($result);die;

            // If we have success - username and password match
            if ($result !== FALSE) {
                // Set is logged in
                $_SESSION['isLoggedIn'] = true;
                // Set user data to the session
                $_SESSION['user'] = $result;
                
                // Check if remember be is checked and if it is checked set cookie with name remember_me and value username
                if (isset($_POST['remember_me']) && $_POST['remember_me'] == 'yes') {
                    setcookie('remember_me', $result['id'], time() + (30*24*60*60), '/');
                }
            }           
        }
    }
}

//list newest hotels by created_at - colums id , name, stars and limithem to 3;
function getMenu($path)
{
    if (strlen($path) > 1) {
    $homepagePath = '.';
       } else {
    $homepagePath = '..';
}
 ?> <ul>
            <li><a href="<?php echo $homepagePath;?>/index.php">Начало</a></li>
            <li><a href="<?php echo $path;?>/hotels.php">Хотели</a></li>
            <li><a href="<?php echo $path;?>/users.php">Потребители</a></li>
            
            <?php if (isset($_SESSION['isLoggedIn']) && $_SESSION['isLoggedIn'] == true): ?>
            
            <li>Welcome <strong><?php echo $_SESSION['user']['username']; ?></strong></li>
            <li><a href="<?php echo $path;?>/logout.php">Изход</a></li>
            
            <?php else: ?>
            
            <li><a href="<?php echo $path;?>/login.php">Вход</a></li>
            <li><a href="<?php echo $path;?>/register.php">Регистрация</a></li>
            
            <?php endif;?>
        </ul>

<?php
}