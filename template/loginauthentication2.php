<?php
$servername = "localhost:3308";
$username = "root";
$password = "";
$dbname = "glucods";
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn)
{
    die("Connection failed: " . mysqli_connect_error());
}
$login=$_POST['username'];
$passwd=$_POST['password'];
if($login!=''&& $passwd!='')
{
 $query="select * from physician where firstname='".$login."' and password='".$passwd."'";

 $result=mysqli_query($conn,$query); 

 if(!$result)
    die("Query Failed: " .  mysqli_error($conn));
 else{
     if(mysqli_num_rows($result)>0)
     {
        $_SESSION['username']=$login;
        echo "welcome to php";
		 	 header("location: dashboard2.php");

     }
    else
    {
           echo "Incorrect username or password"; 
   ?>
 
   <a href="login5.php">Retry Login!</a>
       <?php 
     }
 }
}
?>