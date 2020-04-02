<?php
//--------- YOUR MYSQL CONNECTION SETTINGS
$servername = "localhost"; 
$database = "";
$username = "";
$password = "";
$datepost = date("Y-m-d");
$ip = $_SERVER['REMOTE_ADDR'];
$domain = $_SERVER['SERVER_NAME'];
$browser = $_SERVER['HTTP_USER_AGENT'];
$server = $_SERVER['PHP_SELF'];
$path = pathinfo($server);
$current_file = $path['basename'];
// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
// echo "Connected successfully";
// else {
//     echo "Votre conexion es un success";
// }
//echo $server;
//mysqli_close($conn);
?>
