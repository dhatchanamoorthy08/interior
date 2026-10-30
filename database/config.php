<?php
/**
 * Database Configuration for ELEGANT DESIGNERS
 */

define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'elegant_designers');

/* Attempt to connect to MySQL database */
$link = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD);

// Check connection
if($link->connect_error){
    die("ERROR: Could not connect to database server. " . $link->connect_error);
}

// Attempt to create database if it doesn't exist (helpful for auto-setup on local environments)
$sql_db = "CREATE DATABASE IF NOT EXISTS " . DB_NAME;
if($link->query($sql_db) === TRUE) {
    // Select the database
    $link->select_db(DB_NAME);
    
    // Attempt to create table if it doesn't exist
    $sql_table = "CREATE TABLE IF NOT EXISTS `contact_submissions` (
      `id` INT AUTO_INCREMENT PRIMARY KEY,
      `full_name` VARCHAR(100) NOT NULL,
      `phone_number` VARCHAR(20) NOT NULL,
      `whatsapp_reachable` TINYINT(1) DEFAULT 0,
      `interior_type` VARCHAR(50) NOT NULL,
      `email_address` VARCHAR(100) NOT NULL,
      `property_location` VARCHAR(150) NOT NULL,
      `message` TEXT NOT NULL,
      `created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP
    ) ENGINE=InnoDB;";
    
    $link->query($sql_table);
} else {
    die("ERROR: Could not create database. " . $link->error);
}
?>
