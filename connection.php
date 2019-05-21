<?php
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "register-form";
 
  //connection start
 
  $conn = mysqli_connect($servername,$username,$password,$dbname);
  
if ($conn)
{
	
    echo "connection success";
}
else
{
	die ("connection failed".mysqli_connect_error());
}
?>
