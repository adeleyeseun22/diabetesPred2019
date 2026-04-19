<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST')
{ 
	 $infirstname = $_POST["firstname"];
	$inlastname = $_POST["lastname"];
	$inPassword = $_POST["password"];
		$innumber = $_POST["number"];

 	$inEmail = $_POST["email"];


$conn = new mysqli('localhost:3308', 'root', '', 'registerdb');
if($conn->connect_error)
{
die('Connection Failed : '.$conn->connect_error);
}else{
$stmt = $conn->prepare("insert into `registration`(firstname, lastname, password, number, email) values(?, ?, ?, ?, ?)");
$stmt->bind_param("sssis", $infirstname, $inlastname, $inpassword, $innumber, $inemail);
$stmt->execute();
echo "registration Successful";
$stmt->close();
$conn->close();

}
}

?>