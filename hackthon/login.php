<?php
include 'db_connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $email = $_POST['email'];
  $password = $_POST['password'];

  $sql = "SELECT * FROM login WHERE email = ? AND password = ?";
  $stmt = $conn->prepare($sql);
  $stmt->bind_param("ss", $email, $password);
  $stmt->execute();

  $result = $stmt->get_result();
  if ($result->num_rows > 0) {
    // User exists, start a session and redirect to a different page
    session_start();
    $_SESSION['loggedin'] = true;
    $_SESSION['email'] = $email;
    header("Location: index.html");
  } else {
    // User does not exist or password is incorrect
    echo "Invalid email or password";
  }

  $stmt->close();
}
$conn->close();
?>