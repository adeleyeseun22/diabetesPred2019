    <?php
                $servername = "localhost:3308";
                $username = "root";
                $password = "";
                $dbname = "glucods";

                //Create connection
                $conn = mysqli_connect($servername, $username, $password, $dbname);
                // Check connection
                if (!$conn) {
                    die("Connection failed: " . mysqli_connect_error());
                }

                $sql = "SELECT  concat(patientdata.PatientFname, ' ' ,patientdata.PatientLname) as Name, test.Test_id, test.Lab_ID, test.Patient_id, test.Age, test.Bmi, test.FastingGlucose, test.2HrsGlucose, test.RandomGlucose, test.InsulinFasting, test.Insulin2Hrs, test.InsulinRandom, test.BloodPressure, test.DPF from patientdata join test on patientdata.P_id=test.Test_id";
                $result = mysqli_query($conn, $sql);

                ?>
                <div class="container" style="width: 900px;">
                    <div class="table-responsive">
                        <table class="table table-striped table-hover card-text" bgcolor="#FFFF"> 
                                    <thead bgcolor="#FFF">
                                        <tr>
                                        <th>Name</th>
                                        <th>Test_ID</th>
                                        <th>Lab_ID</th>
                                        <th>Patient_ID</th>
                                        <th>Age</th>
                                        <th>Bmi</th>
                                        <th>FastingGlucose</th>
                                        <th>2HrsGlucose</th>
                                        <th>RandomGlucose</th>
                                        <th>Insulinfasting</th>
                                        <th>Insulin2Hrs</th>
                                        <th>InsulinRandom</th>
                                        <th>BloodPressure</th>
                                        <th>DPF</th>
                                     </thead>
                    </div>
 


</div>


                <?php
                if (mysqli_num_rows($result) > 0) 
                {
                     while($row = mysqli_fetch_array($result))

                     {

?>
                         <tr>
                         <td><?php echo $row["Name"]; ?></td>
                         <td><?php echo $row["Test_ID"]; ?></td>
                         <td><?php echo $row["Lab_ID"]; ?></td>
                         <td><?php echo $row["Patient_ID"]; ?></td>
                         <td><?php echo $row["Age"]; ?></td>
                         <td><?php echo $row["Bmi"]; ?></td>
                         <td><?php echo $row["FastingGlucose"]; ?></td>
                         <td><?php echo $row["2HrsGlucose"]; ?></td>
                         <td><?php echo $row["RandomGlucose"]; ?></td>
                         <td><?php echo $row["Insulinfasting"]; ?></td>
                         <td><?php echo $row["Insulin2Hrs"]; ?></td>
                         <td><?php echo $row["InsulinRandom"]; ?></td>
                         <td><?php echo $row["BloodPressure"]; ?></td>
                         <td><?php echo $row["DPF"]; ?></td>


                     </tr>  
                     <?php 
                 }

            }
            ?>
        </table>