<?php
/*if(isset($_GET['edel']))
 {
session_start();
 $mail=$_SESSION['mail'];	*/
 $name=$_GET["pid"];
 $con = mysqli_connect("localhost","root","","project","3306");
 echo "connection1",$mail;
 if (!mysqli_connect_errno())
   {echo "connection2";
$result=mysqli_query($con,"select * from user where mail='$name' ");
if(mysqli_num_rows($result)>0)
 {
	 echo "connection3";
 $row=mysqli_fetch_assoc($result);
 mysqli_query($con,"delete from user where mail='$name'  ");
	 header('Location: manageuser.php');
 }
 }
 
else
{  echo "no record";
   echo mysqli_error();
   mysqli_close($con); 
}
 //}
/*else
{
  echo 'error in worker details page';
}*/
   
?>
