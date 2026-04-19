<?php
 
include("DBConnection.php"); // include the connection object from the DBConnection.php
 
if ($_SERVER['REQUEST_METHOD'] == 'POST')
{ 
	 $infirstname = $_POST["firstname"];
	$inlastname = $_POST["lastname"];
	$inPassword = $_POST["password"];
		$innumber = $_POST["number"];

 	$inEmail = $_POST["email"];

 
 
 $encryptPassword = password_hash($inPassword, PASSWORD_DEFAULT);
 
 $stmt = $db->prepare("INSERT INTO registration(firstname,lastname,password,number,email) VALUES(?, ?, ?, ?, ?)"); //Fetching all the records with input credentials
 $stmt->bind_param("sssis", $infirstname,$inlastname, $encryptPassword, $innumber, $inEmail); //Where s indicates string type. You can use i-integer, d-double
 $stmt->execute();
 $result = $stmt->affected_rows;
 $stmt -> close();
 $db -> close(); 
 
 if($result > 0)
 {
 header("location: dashboard.php"); // user will be taken to the success page
 }
 else
 {
 echo "Oops. Something went wrong. Please try again"; 
 ?>
 <a href="login4.php">Try Login</a>
 <?php 
 }
}
?>