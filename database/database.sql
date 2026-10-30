-- Database setup for ELEGANT DESIGNERS

CREATE DATABASE IF NOT EXISTS `elegant_designers`;
USE `elegant_designers`;

CREATE TABLE IF NOT EXISTS `contact_submissions` (
  `id` INT AUTO_INCREMENT PRIMARY KEY,
  `full_name` VARCHAR(100) NOT NULL,
  `phone_number` VARCHAR(20) NOT NULL,
  `whatsapp_reachable` TINYINT(1) DEFAULT 0,
  `interior_type` VARCHAR(50) NOT NULL,
  `email_address` VARCHAR(100) NOT NULL,
  `property_location` VARCHAR(150) NOT NULL,
  `message` TEXT NOT NULL,
  `created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB;
