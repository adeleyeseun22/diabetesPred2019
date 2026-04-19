<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost:3308", "root", "", "glucods");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Attempt select query execution
$sql = "SELECT p_id, test.Age, test.Bmi, test.FastingGlucose, test.2HrsGlucose, test.RandomGlucose, test.Insulinfasting, test.Insulin2Hrs, test.InsulinRandom, test.BloodPressure, test.DPF, PatientFName, PatientLName, DOB from patientdata join test on patientdata.P_id=test.test_id";
if($result = mysqli_query($link, $sql)){
    if(mysqli_num_rows($result) > 0){
        echo "<table>";
            echo "<tr bgcolor:black>";
                echo "<th>patient_id</th>";
				echo "<th>Age</th>";
				echo "<th>Bmi</th>";
				echo "<th>FastingGlucose</th>";
                echo "<th>2HrsGlucose</th>";
                echo "<th>RandomGlucose</th>";
                echo "<th>Insulinfasting</th>";
				echo "<th>Insulin2Hrs</th>";
				echo "<th>InsulinRandom</th>";
                echo "<th>BloodPressure</th>";
                echo "<th>DPF</th>";
                echo "<th>FirstName</th>";
                echo "<th>LastName</th>";
                echo "<th>DOB</th>";
            echo "</tr>";
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
                echo "<td>" . $row['p_id'] . "</td>";
				echo "<td>" . $row['Age'] . "</td>";
                echo "<td>" . $row['Bmi'] . "</td>";
                echo "<td>" . $row['FastingGlucose'] . "</td>";
                echo "<td>" . $row['2HrsGlucose'] . "</td>";
				echo "<td>" . $row['RandomGlucose'] . "</td>";
				echo "<td>" . $row['Insulinfasting'] . "</td>";
				echo "<td>" . $row['Insulin2Hrs'] . "</td>";
				echo "<td>" . $row['InsulinRandom'] . "</td>";
                echo "<td>" . $row['BloodPressure'] . "</td>";
                echo "<td>" . $row['DPF'] . "</td>";
                echo "<td>" . $row['PatientFName'] . "</td>";
                echo "<td>" . $row['PatientLName'] . "</td>";
                echo "<td>" . $row['DOB'] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
        // Free result set
        mysqli_free_result($result);
    } else{
        echo "No records matching your query were found.";
    }
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
?>

<!DOCTYPE html>
<html>
	<head>
	
	</head>


</html>