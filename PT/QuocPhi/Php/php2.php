<?php
$servername="localhost";
$username="nhom9";
$pass="123456";
$data="covid";
$conn= new PDO("mysql:host=$servername;dbname=$data",$username,$pass);
$conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
?>