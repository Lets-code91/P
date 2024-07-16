<?php
include 'conn.php';

if(isset($_POST['fullname'],$_POST['gender'],$_POST['phone'],$_POST['father'],$_POST['mother'],$_POST['email'],$_POST['pwd'],$_POST['options'])){
    
    $conn = mysqli_connect($servername, $username, $password, $db);

    // Check connection
    if(!$conn){
        die("Connection failed: " . mysqli_connect_error());
    }

    $fullname = mysqli_real_escape_string($conn, $_POST['fullname']);
    $gender = mysqli_real_escape_string($conn, $_POST['gender']);
    $phone = mysqli_real_escape_string($conn, $_POST['phone']);
    $father = mysqli_real_escape_string($conn, $_POST['father']);
    $mother = mysqli_real_escape_string($conn, $_POST['mother']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $pwd = mysqli_real_escape_string($conn, $_POST['pwd']);
    $city = mysqli_real_escape_string($conn, $_POST['options']);

    $sql = "INSERT INTO pro (fullname, gender, phone, father, mother, email, password, city) VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
    
    $query = mysqli_prepare($conn, $sql);

    if($query){
        mysqli_stmt_bind_param($query, "ssssssss", $fullname, $gender, $phone, $father, $mother, $email, $pwd, $city,);
        mysqli_stmt_execute($query);

        if(mysqli_stmt_affected_rows($query) > 0){
            echo "Registration successful";
            header('Location: work/demo.html'); 
        } else {
            echo "Error: Registration failed";
        }

        mysqli_stmt_close($query);
    } else {
        echo "Error: " . mysqli_error($conn);
    }

    mysqli_close($conn);
}
?>
