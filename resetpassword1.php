<?php

session_start();
$name=$_SESSION['name'];

if(isset($_GET['rsub']))
{
 $rmail=$_GET['rmail'];
 $con = mysqli_connect("localhost","root","","project","3306");
 if (!mysqli_connect_errno())
   {
$result=mysqli_query($con,"select * from $name where mail='$rmail' ");
if(mysqli_num_rows($result)>0)
 {
 $row=mysqli_fetch_assoc($result);
 header('Location: reset.php');
 }
else 
 {
  echo "invalid mailid".mysqli_error($con);
  header('Location: resetpassword.php');
 }
}
else
{
   echo mysqli_error();
   mysqli_close($con); 
}
}
else
  echo 'error in reset password page';
   
?>