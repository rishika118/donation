<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "donation_website";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$charity_name = $_POST['charity_name'];
$charity_cause = $_POST['charity_cause'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$address = $_POST['address'];
$password = $_POST['password'];

$sql = "INSERT INTO charities (charity_name, charity_cause, email, phone, address, password)
        VALUES ('$charity_name', '$charity_cause', '$email', '$phone', '$address', '$password')";

if ($conn->query($sql) === TRUE) {
  echo "Charity registered successfully.";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
