 <?php

                                                if (isset($_POST['ViewtestBtn'])) 
                                                {
                                                    # code...
                                                    $link = mysqli_connect("localhost:3308", "root", "", "glucods");
 
                                                    // Check connection
                                                    if($link === false){
                                                        die("ERROR: Could not connect. " . mysqli_connect_error());
                                                    }

                                                    //$search = $link->real_escape_string($_POST['search']);
                                                    $firstname = mysqli_real_escape_string($link, $_REQUEST['search']);

                                                    $resultset = $link->query("SELECT * from patientdata where PatientFname = '$search'");






                                                    if ($resultset->num_rows > 0) 
                                                    {
                                                        echo "<table class=table table-striped  table-hover>";
                                                        echo "<tr bgcolor=white>";
                                                            echo "<th>FirstName</th>";
                                                            echo "<th>Lastname</th>";
                                                            echo "<th>DOB</th>";
                                                            echo "<th>Address</th>";
                                                            echo "<th>State</th>";
                                                            echo "<th>Contact</th>";
                                                            echo "<th>Emergency Contact</th>";
                                                             echo "<th></th>";
                                                              echo "<br />";
                                                              echo "<br />";

                                                            
                                                        echo "</tr>";
                                                        # code...
                                                        while ( $rows = $resultset->fetch_assoc()) 
                                                        {
                                                            $id = $rows['P_ID'];
                                                            # code...
                                                           // $output .= "FirstName: $PatientFname<br /> Lastname: $PatientLname<br /><br />";
                                                             echo "<tr bgcolor=white>";
                                                                echo "<td>" . $rows['PatientFname'] . "</td>";
                                                                echo "<td>" . $rows['PatientLname'] . "</td>";
                                                                echo "<td>" . $rows['DOB'] . "</td>";
                                                                echo "<td>" . $rows['Address'] . "</td>";
                                                                echo "<td>" . $rows['State'] . "</td>";
                                                                echo "<td>" . $rows['Contact'] . "</td>";
                                                                echo "<td>" . $rows['EmergencyContact'] . "</td>";
                                                                /*
                                                                echo "<td> <a href ='select.php?id=$id'>view</a> </td>";

                                                                '<td><button id="ViewtestBtn" class="btn btn-primary" name=ViewtestBtn method="POST" formaction=view3.php>View Test</button>
                                                                 </td>'.
                                                                  */ 
                                                             "</tr>";
                                                                                                      }
                                                    }else
                                                    {
                                                     //   $output = "No Results";
                                                       echo "<p> <font color=red>No Results!</font> </p>";
                                                    }

                                                }
                                            ?>