<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost:3308", "root", "", "glucods");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Escape user inputs for security
$Age = mysqli_real_escape_string($link, $_REQUEST['age']);
$bmi = mysqli_real_escape_string($link, $_REQUEST['bmi']);
$fastingglucose = mysqli_real_escape_string($link, $_REQUEST['fastingglucose']);
$twoHoursGlucose = mysqli_real_escape_string($link, $_REQUEST['2HoursGlucose']);
$RandomGlucose = mysqli_real_escape_string($link, $_REQUEST['RandomGlucose']);
$insulinFasting = mysqli_real_escape_string($link, $_REQUEST['Insulinfasting']);
$Insulin2Hours = mysqli_real_escape_string($link, $_REQUEST['Insulin2Hours']);
$InsulinRandom = mysqli_real_escape_string($link, $_POST['InsulinRandom']);
$BloodPressure = mysqli_real_escape_string($link, $_POST['BloodPressure']);
$PedFunction = mysqli_real_escape_string($link, $_POST['PedFunction']);
$ins= mysqli_real_escape_string($link, $_POST['LabScientist']);
$ins2= mysqli_real_escape_string($link, $_POST['Doctor']);
$ins3= mysqli_real_escape_string($link, $_POST['Patient']);
 
// Attempt insert query execution

$sql = "INSERT INTO test (lab_id, physician_id, patient_id, Age, Bmi, FastingGlucose, 2HrsGlucose, RandomGlucose, InsulinFasting, Insulin2Hrs, InsulinRandom, BloodPressure, DPF) VALUES ((SELECT lab_id from LabScientist where lab_id='$ins'), (SELECT physician_id from Physician where physician_id='$ins2'), (SELECT P_ID from patientdata where P_ID='$ins3'), '$Age', '$bmi', '$fastingglucose', '$twoHoursGlucose', '$RandomGlucose', '$insulinFasting', '$Insulin2Hours','$InsulinRandom','$BloodPressure', '$PedFunction')";


if(mysqli_query($link, $sql)){
    echo "Records added successfully.";
	header("location: diagnosis.php");
		
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
?>