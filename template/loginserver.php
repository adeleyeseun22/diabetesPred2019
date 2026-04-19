
<?php 
 // to get values passe from form in login.php file
 $username = "";

if(isset($_POST['username'])){
    $username = $_POST['username'];
}
 $password = "";
if(isset($_POST['username'])){
    $password = $_POST['password'];
 }
 // to prevent mysql injection


 //connect to the server select database
$conn = new mysqli('localhost:3308', 'root', '', 'registerdb');

	
if($conn->connect_error)
{
die('Connection Failed : '.$conn->connect_error);
}else{
  $user_check_query = "SELECT * FROM register WHERE firstname='$username' OR password='$password' LIMIT 1";
	  $result = mysqli_query($conn, $user_check_query);
  $user = mysqli_fetch_assoc($result);
}
 if ( $user['username'] == $username && $user['password'] == $password ) {
  echo "login success! Welcome".$user['username'];
	   //	header('location: dashboard.html');

 } else {
     echo "Failed to login!";
}

?>
