<!-- ... -->
<style>
    
    body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background-color: #f8f9fa;
}

.card {
    border: none;
    border-radius: 10px;
    box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
    transition: 0.3s;
}

.card:hover {
    box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
}

.card-header {
    font-size: 20px;
    font-weight: bold;
}

.card-body {
    padding: 20px;
}

.table {
    margin-top: 20px;
}

.btn {
    width: 200px;
    transition: 0.3s;
}

.btn:hover {
    opacity: 0.7;
}

.btn-success {
    background-color: #28a745;
    border: none;
    color: white;
}

.btn-primary {
    background-color: #007bff;
    border: none;
    color: white;
}

.mt-3 {
    margin-top: 1rem !important;
}

.ml-3 {
    margin-left: 1rem !important;
}
</style>
<?php
include 'db_connect.php';


$sql = "SELECT * FROM cases";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
?>


<!-- ... -->
<!-- ... -->
<div class="card mb-3">
    <div class="card-header bg-primary text-white">Case Details</div>
    <div class="card-body">
        <table class="table table-striped table-bordered">
            <tbody>
                <tr>
                    <th scope="row">Case Type</th>
                    <td><?php echo $row["case_type"]; ?></td>
                </tr>
                <tr>
                    <th scope="row">Case Description</th>
                    <td><?php echo $row["case_description"]; ?></td>
                </tr>
                <tr>
                    <th scope="row">State</th>
                    <td><?php echo $row["state"]; ?></td>
                </tr>
                <tr>
                    <th scope="row">City</th>
                    <td><?php echo $row["city"]; ?></td>
                </tr>
            </tbody>
        </table>
        <a href="https://meet.google.com/" target="_blank" class="btn btn-success mt-3">Go to Google Meet</a>
        <a href="https://calendar.google.com/" target="_blank" class="btn btn-primary mt-3 ml-3">Go to Google Calendar</a>
    </div>
</div>
<!-- ... -->
</div>
<!-- ... --><?php
    }
} else {
    echo "0 results";
}
$conn->close();
?>
<!-- ... -->