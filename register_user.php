ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
<?php
// Database connection




$servername = "localhost";
$username = "root";
$password = "Rishika@1"; // your actual MySQL password
$dbname = "donation_website"; // make sure this matches your DB name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}



// Get data from form
$First_Name = $_POST['first_name'];
$Last_Name = $_POST['last_name'];
$email_id = $_POST['email'];
$phone = $_POST['phone'];
$address = $_POST['address'];
$password = password_hash($_POST['password'], PASSWORD_BCRYPT); // Password hashing

// SQL query to insert data
$sql = "INSERT INTO donors (first_name, last_name, email, phone, address, password) 
        VALUES ('$First_Name', '$Last_Name', '$email_id', '$phone', '$address', '$password')";

if ($conn->query($sql) === TRUE) {
  echo "New donor registered successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
