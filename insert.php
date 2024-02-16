<?php
include 'db_connect.php';

// Get form data
$cnr = 'IND24' . str_pad(mt_rand(0, 9999), 9, '0', STR_PAD_LEFT);
$applicationFor = $_POST['applicationFor'];
$receivedThrough = $_POST['receivedThrough'];
$state = $_POST['state'];
$district = $_POST['district'];
$taluk = $_POST['taluk'];
$natureOfLegalAid = $_POST['natureOfLegalAid'];
$summaryOfProblem = $_POST['summaryOfProblem'];
$applicationName = $_POST['applicationName'];
$gender = $_POST['gender'];
$dob = $_POST['dob'];
$mobileNo = $_POST['mobileNo'];
$email = $_POST['email'];
$eligibilityCategory = $_POST['eligibilityCategory'];
$currentAddress = $_POST['currentAddress'];
$pr_state = $_POST['pr_state'];
$pr_district = $_POST['pr_district'];
$previousCase = $_POST['previousCase'];
$caseType = $_POST['caseType'];
$caseNo = $_POST['caseNo'];

// Insert form data into database
$sql = "INSERT INTO usr_reg (cnr, applicationFor, receivedThrough, state, district, taluk, natureOfLegalAid, summaryOfProblem, applicationName, gender, dob, mobileNo, email, eligibilityCategory, currentAddress, pr_state, pr_district, previousCase, caseType, caseNo) VALUES ('$cnr','$applicationFor', '$receivedThrough','$state','$district','$taluk','$natureOfLegalAid','$summaryOfProblem','$applicationName','$gender','$dob','$mobileNo','$email','$eligibilityCategory','$currentAddress','$pr_state','$pr_district','$previousCase','$caseType','$caseNo')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully Your CNR number is: " . $cnr;
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>