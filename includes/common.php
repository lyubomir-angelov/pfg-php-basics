<?php
session_start();

$dsn = 'mysql:dbname=hotels;host=localhost';
$user = 'root';
$password = 'lubaka';

try {
    $dbh = new PDO($dsn, $user, $password);
} catch (PDOException $e) {
    die('Connection failed: ' . $e->getMessage());
}













/*
class Hotel {
    
    const RESTAURANT = 'pri pesho';
    
    public function getNewest()
    {
        
        return 'novite hoteli';
    }
    
    public function getAll()
    {
        return 'all hotels';
    }
    
}

$hotels = new Hotel();
echo Hotel::RESTAURANT;
echo $hotels->getAll();
*/
