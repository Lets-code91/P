<?php
include 'connection.php'; // Include your database connection file

// Initialize variables
$name = "";
$results = array();

// Process form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitize and escape user input
    $fullname = mysqli_real_escape_string($conn, $_POST['fullname']);

    // Construct SQL query to fetch all records where fullname matches the input
    $sql = "SELECT fullname, gender, phone, father, mother, email, optionCity FROM staff WHERE fullname LIKE '%$fulname%'";

    // Execute SQL query
    $result = $conn->query($sql);

    // Store results in an array
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $results[] = $row;
        }
    } else {
        echo "No results found";
    }
}

$conn->close(); // Close the database connection
?>