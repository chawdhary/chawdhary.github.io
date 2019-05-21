


<?php
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "register-form";
 
  //connection start
 
  $conn = mysqli_connect($servername,$username,$password,$dbname);
  
if ($conn)
{
	
    echo " connection success";
}
else
{
	die ("connection failed".mysqli_connect_error());
}
 error_reporting(0);
 
 $rn = $_GET['rollnumber'];
 $un = $_GET['username'];
 $pw = $_GET['password'];

 
 
include ("connection.php");
 $query = "INSERT INTO login VALUES ('$rn' ,'$un' ,'$pw')";
  $data = mysqli_query($conn, $query);
  if ($data)
 {
 	echo "inserted";
 	}

?>
