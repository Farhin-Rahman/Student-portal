<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "university scholarship management";

$conn = new mysqli($servername, $username, $password);
if($conn-> connect_error){
	die("Connection Failed: ". $conn->connect_error);
}
else{
	mysqli_select_db($conn, $dbname);

}
?>
