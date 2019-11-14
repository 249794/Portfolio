<?php

//INCLUDE database gegevens
include 'config.database.inc.php';

$link = mysqli_connect($db['server'], $db['user'], $db['password']);

//CREATE A DATABASE
$sql = "CREATE DATABASE `". $db['database'] . "` COLLATE 'latin1_general_ci'";

echo $sql . "<br>";

mysqli_query($link,$sql);

echo mysqli_error($link) ."<br>"; 

//CREATE A TABLE Users

mysqli_select_db($link, $db['database']);

$sql = "CREATE TABLE `users` (
       `Id` MEDIUMINT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
       `Username` VARCHAR(50) NOT NULL UNIQUE KEY,
       `Password` VARCHAR(70) NOT NULL
       )"; 

echo $sql ."<br>";

mysqli_query($link,$sql);

echo mysqli_error($link)."<br>";

// 

$NewUser = 'admin';
$Newpassword = 'welcome';
$Newpassword = hash('sha256', $Newpassword);

$sql = "INSERT INTO `users` SET
       `Username` = '" . $NewUser . "',
       `Password` = '" . $Newpassword . "' ";

mysqli_query($link,$sql);

echo $sql ."<br>";

// CREATE A TABLE Projecten

mysqli_select_db($link, $db['database']);

$sql = "CREATE TABLE `Projecten` (
		`Id` MEDIUMINT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
		`Projectnaam` VARCHAR(254),
		`Description` TEXT,
		`Image` LONGBLOB
		)";

echo $sql . "<br>";

mysqli_query($link,$sql);

echo mysqli_error($link)."<br>";