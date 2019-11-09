
<?php

$host = "localhost";
    $username = "root";
    $password = "";
    $database = "customer";

$conn = new mysqli( $host, $username, $password, $database );
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER['REQUEST_METHOD']=='POST'){
$username = $_POST['name'];
$password = $_POST['password'];
require_once('dbConnect.php');
$sql= "SELECT * FROM customer_details WHERE name = '$username' AND password = '$password' ";
$result = mysqli_query($con,$sql);
$check = mysqli_fetch_array($result);
if(isset($check)){
echo 'success';
}else{
echo 'failure';
}
}
?>