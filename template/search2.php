<table>
	
	<tr>
		<th>ID</th>
		<th>Firstname</th>
		<th>Lastname</th>


	</tr>

</table>


<?php 

$conn=mysqli_connect("localhost:3308", "root", "", "glucods");
$set=$_POST['search'];
if ($set) {
	# code...
	$show="SELECT * from patientdata where PatientFname='$set'";
	$result=mysqli_query($conn,$show);
	while ($rows=mysqli_fetch_array($result)) 
	{
		# code...
		echo  "<tr>";
		echo  "<td>";
		echo $rows['P_ID'];
		echo  "<td>";
		echo $rows['PatientFname'];
		echo  "<td>";
		echo $rows['PatientLname'];
		echo  "<td>";
		echo  "<tr>";
		echo "<br/>";

	}
}
else
{
	echo "No result found";
}
?>