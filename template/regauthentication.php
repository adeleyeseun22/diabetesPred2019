<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost:3308", "root", "", "glucods");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Escape user inputs for security
$firstname = mysqli_real_escape_string($link, $_REQUEST['firstname']);
$Lastname = mysqli_real_escape_string($link, $_REQUEST['lastname']);
$password = mysqli_real_escape_string($link, $_REQUEST['password']);
$number = mysqli_real_escape_string($link, $_REQUEST['number']);
$email= mysqli_real_escape_string($link, $_REQUEST['email']);

 
// Attempt insert query execution
$sql = "INSERT INTO physician (firstname, Lastname, password, number, email) VALUES ('$firstname', '$Lastname', '$password', '$number', '$email')";
if(mysqli_query($link, $sql)){
    echo "Records added successfully.";
	 header("location: login5.php");
		
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
?>