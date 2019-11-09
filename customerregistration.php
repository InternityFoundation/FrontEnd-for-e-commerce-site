<?php

$A = $_POST['name'];
$B = $_POST['contact'];
$C = $_POST['email'];
$D = $_POST['line1'];
$E = $_POST['line2'];
$F = $_POST['city'];
$G = $_POST['state'];
$H = $_POST['pin-code'];
$I = $_POST['psw'];
	$host = "localhost";
    $username = "root";
    $password = "";
    $database = "customer";

$conn = new mysqli( $host, $username, $password, $database );
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO customer_details (name,contact,email,line1,line2,city,state,pin,password)
VALUES ('$A','$B','$C','$D','$E','$F','$G','$H','$I')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>