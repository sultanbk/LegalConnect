<?php
include 'db_connect.php';

if (!isset($_GET['cnr'])) {
  die('CNR number is not set');
}

$cnr = $_GET['cnr']; // replace with $_POST if you're using a form with method="post"

$sql = "SELECT * FROM usr_reg WHERE cnr = ?";
$stmt = $conn->prepare($sql);

if ($stmt === false) {
  die('Failed to prepare SQL query: ' . $conn->error);
}

$stmt->bind_param("s", $cnr);

$stmt->execute();
$result = $stmt->get_result();
?>

<!DOCTYPE html>
<html>
<head>
  <title>CNR Information</title>
  <!-- Include Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <style>
    body {
      background: linear-gradient(rgba(128,128,128,0.5), rgba(128,128,128,0.5)), url('/images/login_bg.jpg') no-repeat center center fixed; 
      -webkit-background-size: cover;
      -moz-background-size: cover;
      -o-background-size: cover;
      background-size: cover;
    }
    /* rest of your styles */
  </style>
</head>
<body>
    <div class="container">
        <h1 class="mt-4 mb-4 display-4 text-center">CNR Information</h1>
        <?php
        if ($result->num_rows > 0) {
          // output data of each row
          while($row = $result->fetch_assoc()) {
            echo "<table class='table table-bordered'>
                    <tr>
                      <th class='text-center'>CNR</th>
                      <td>" . $row["cnr"]. "</td>
                    </tr>
                    <tr>
                      <th class='text-center'>Application Name</th>
                      <td>" . $row["applicationName"]. "</td>
                    </tr>
                    <tr>
                      <th class='text-center'>State</th>
                      <td>" . $row["pr_state"]. "</td>
                    </tr>
                    <tr>
                      <th class='text-center'>District</th>
                      <td>" . $row["pr_district"]. "</td>
                    </tr>
                    <tr>
                      <th class='text-center'>Case Type</th>
                      <td>" . $row["caseType"]. "</td>
                    </tr>
                  </table>";
          }
        } else {
          echo "<div class='alert alert-warning'>No results</div>";
        }
        ?>
    </div>
</body>
</html>

<?php
$stmt->close();
$conn->close();
?>