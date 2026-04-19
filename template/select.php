<?php 

if (isset($_GET['id']))
{
	$id = $_GET['id'];
	$link = mysqli_connect("localhost:3308", "root", "", "glucods");
 
                                                    // Check connection
	if($link === false){
die("ERROR: Could not connect. " . mysqli_connect_error());

}


 $resultset = $link->query("SELECT '$id', test.Age, test.Bmi, test.FastingGlucose, test.2HrsGlucose, test.RandomGlucose, test.Insulinfasting, test.Insulin2Hrs, test.InsulinRandom, test.BloodPressure, test.DPF, test.Lab_ID, test.Test_ID, PatientFName, PatientLName from patientdata join test on patientdata.P_id=test.test_id");
$result = mysqli_query($conn, $sql);

echo "<meta http-equiv='refresh' content= '0; url=view3.php'>";

mysqli_close($link);
} 
?>