<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost:3308", "root", "", "patientdb");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Escape user inputs for security
$firstname = mysqli_real_escape_string($link, $_REQUEST['firstname']);
$lastname = mysqli_real_escape_string($link, $_REQUEST['lastname']);

$sql = "SELECT FirstName, LastName FROM Patientdata where Firstname=$firstname, LastName=$lastname";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo  " - Name: " . $row["FirstName"]. " " . $row["lastname"]. "<br>";
    }
} else {
    echo "0 results";
}


if(mysqli_query($link, $result)){
    echo "Records added successfully.";
	 header("location: view3.php");
		
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
 
 
// Close connection
mysqli_close($link);
?>