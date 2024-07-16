<?php 
include 'conn.php'; // Make sure conn.php includes your database connection logic

if(isset($_POST['email'], $_POST['pwd'])) {
 
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['pwd']);

 
    // Query to check if the user with given email and password exists
    $query = "SELECT * FROM pro WHERE email='$email' AND password= '$password'";
    $result = mysqli_query($conn, $query);

    if(mysqli_num_rows($result) == 1) {
    
        session_start();
        $_SESSION['email'] = $email;
      
        header('Location: work/demo.html'); 
        exit();
    } else {
       
        echo "Invalid email or password";
    
    }

   
    mysqli_free_result($result);
}


mysqli_close($conn);
?>
