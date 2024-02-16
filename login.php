<?php
// Establish database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "casemngmt";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Retrieve user from database
    $sql = "SELECT * FROM users WHERE email = '$email'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // User found, verify password
        $row = $result->fetch_assoc();
        if (password_verify($password, $row["password"])) {
            // Password is correct, login successful
            echo "Login successful";
            // Redirect user to dashboard or another page
            // header("Location: dashboard.php");
        } else {
            // Password is incorrect
            echo "Incorrect password";
        }
    } else {
        // User not found
        echo "User not found";
    }
}

// Close database connection
$conn->close();
?>
