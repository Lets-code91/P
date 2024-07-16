<?php
require "connection.php"; // Include your database connection file

// Initialize variables
$fullname = "";
$results = array();

// Process form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitize and escape user input
    $fullname = mysqli_real_escape_string($conn, $_POST['fullname']);

    // Construct SQL query to fetch all records where fullname matches the input
    $sql = "SELECT fullname, gender, phone, father, mother, email, optionCity FROM staff WHERE fullname LIKE '%$fullname%'";

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

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <div class="container-fluid bg-body-secondary p-4 text-center">
        <h4>Check staff</h4><br>
    </div><br>

    <div class="container-fluid border border-dark-subtle h-75 w-75">
        <form action="" method="post" class="form-control">
            <div class="row g-3">
                <div class="col-sm-6 col-md-6 col-lg-6">
                    <label for="fullname" class="form-label">Full name</label>
                    <input type="text" class="form-control" name="fullname" id="fullname" placeholder="Yourname" required value="<?php echo htmlspecialchars($fullname); ?>">
                </div>
                <div class="col-sm-6 col-md-6 col-lg-6">
                    <label for="number" class="form-label">Phone</label>
                    <input type="text" class="form-control" name="phone" id="phone" placeholder="Number" required>
                </div>
            </div>
            <br>
            <input type="submit" value="Submit" class="btn btn-primary">
        </form>
    </div>

    <?php if (!empty($results)): ?>
        <div class="container mt-4">
            <h4>Search Results</h4>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Full Name</th>
                        <th>Gender</th>
                        <th>Phone</th>
                        <th>Father</th>
                        <th>Mother</th>
                        <th>Email</th>
                        <th>City</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($results as $result): ?>
                        <tr>
                            <td><?php echo htmlspecialchars($result['fullname']); ?></td>
                            <td><?php echo htmlspecialchars($result['gender']); ?></td>
                            <td><?php echo htmlspecialchars($result['phone']); ?></td>
                            <td><?php echo htmlspecialchars($result['father']); ?></td>
                            <td><?php echo htmlspecialchars($result['mother']); ?></td>
                            <td><?php echo htmlspecialchars($result['email']); ?></td>
                            <td><?php echo htmlspecialchars($result['optionCity']); ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    <?php endif; ?>

</body>
</html>
