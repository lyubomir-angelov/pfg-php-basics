<?php
session_start();

session_destroy();

setcookie('remember_me', '', time() -1);

header('Location: ../index.php');
exit;
