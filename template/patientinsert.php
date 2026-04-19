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
$Lastname = mysqli_real_escape_string($link, $_REQUEST['Lastname']);
$DOB = mysqli_real_escape_string($link, $_REQUEST['DOB']);
$Address = mysqli_real_escape_string($link, $_REQUEST['Address']);
$City = mysqli_real_escape_string($link, $_REQUEST['City']);
$Contact = mysqli_real_escape_string($link, $_REQUEST['Contact']);
$EmergencyContact = mysqli_real_escape_string($link, $_REQUEST['EmergencyContact']);
$ins= mysqli_real_escape_string($link, $_POST['Doctor']);
 
// Attempt insert query execution
$sql = "INSERT INTO patientdata (Doctor_ID, PatientFname, PatientLname, DOB, Address, State, Contact, EmergencyContact) VALUES ((SELECT physician_id from physician where physician_id='$ins'), '$firstname', '$Lastname', '$DOB', '$Address', '$City', '$Contact', '$EmergencyContact')";
if(mysqli_query($link, $sql)){
    echo "Records added successfully.";
    header("location: patientData.php");
		
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
?>