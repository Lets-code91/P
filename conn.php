<?php 
$servername = "localhost";
$username = "root";
$password = "";
$db = "project";

$conn = new mysqli($servername,$username,$password,$db);

if(!$conn .mysqli_connect_error() ){
    die("connection failled");
}









?>