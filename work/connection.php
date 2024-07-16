<?php 
$servername = "localhost";
$username = "root";
$password = "";
$db = "company";

$conn = new mysqli($servername,$username,$password,$db);

if(!$conn .mysqli_connect_error() ){
    die("connection failled");
}









?>