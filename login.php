<?php
// Database connection parameters
$host = "localhost:3307"; // Change this to your database host
$username = "root"; // Change this to your database username
$password = ""; // Change this to your database password
$database = "finalfinal"; // Change this to your database name

// Establish database connection
$conn = new mysqli($host, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve entered username and password from the form
$user = $_POST['first'];
$pass = $_POST['password'];

// SQL query to retrieve user's information
$sql = "SELECT * FROM users WHERE username='$user' AND passw='$pass'";
$result = $conn->query($sql);

// Check if there is a matching user in the database
if ($result->num_rows > 0) {
    // Redirect to the dashboard if credentials are valid
    header("Location: test_studentdashboard.html");
    exit();
} else {
    // Redirect back to the login page with an error message if credentials are invalid
    header("Location: login.html?error=invalid_credentials");
    exit();
}

// Close database connection
$conn->close();
?>
