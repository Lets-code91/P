<?php
include 'connection.php'; // Include your database connection file

if(isset($_POST['fullname'], $_POST['gender'], $_POST['phone'], $_POST['father'], $_POST['mother'], $_POST['email'], $_POST['pwd'], $_POST['options'])) {
    
    // Sanitize and escape input data
    $fullname = $conn->real_escape_string($_POST['fullname']);
    $gender = $conn->real_escape_string($_POST['gender']);
    $phone = $conn->real_escape_string($_POST['phone']);
    $father = $conn->real_escape_string($_POST['father']);
    $mother = $conn->real_escape_string($_POST['mother']);
    $email = $conn->real_escape_string($_POST['email']);
    $password = $conn->real_escape_string($_POST['pwd']);
    $options = $conn->real_escape_string($_POST['options']);

    // Prepare SQL statement with placeholders
    $sql = "UPDATE staff SET fullname=?, gender=?, phone=?, father=?, mother=?, email=?, pwd=?, options=? WHERE staff_id=?";

    // Prepare and bind parameters
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sssssssi", $fullname, $gender, $phone, $father, $mother, $email, $password, $options);
    

    
    

    if ($stmt->execute()) {
        echo "Record updated successfully for staff ID: $staff_id<br>";
    } else {
        echo "Error updating record for staff ID: $staff_id - " . $conn->error . "<br>";
    }

   

}

// Close connection
$conn->close();
?>
