
<?php 
 define('DB_SERVER', 'localhost:3308'); //database server url and port
 define('DB_USERNAME', 'root');  //database server username
 define('DB_PASSWORD', ''); //database server password
 define('DB_DATABASE', 'registerdb'); //where profile is the database 
 
 $db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE); 
?>