<?php




$server = "localhost";
$username = "root";
$password = "";

$conn = mysqli_connect($server, $username, $password);


$db_create = "CREATE DATABASE user_info";


mysqli_query($conn, $db_create);
$table_create = "CREATE TABLE `user_info`.`user_data` (`First Name` VARCHAR(120) NOT NULL , `Last Name` VARCHAR(120) NOT NULL , `Email` VARCHAR(120) NOT NULL , `Password` INT(120) NOT NULL , `img_data` VARCHAR(300) NOT NULL ) ENGINE = InnoDB;
";

        $conn = mysqli_connect($server, $username, $password, "user_info");

        $table_create = mysqli_query($conn, $table_create);


header("location:signup.html");