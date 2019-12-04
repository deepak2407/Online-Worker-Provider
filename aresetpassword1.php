<?php

if(isset($_GET['rsub']))
{
 $rmail=$_GET['rmail'];
 $scode=$_GET['scode'];
 $con = mysqli_connect("localhost","root","","project","3306");
 if (!mysqli_connect_errno())
   {
$result=mysqli_query($con,"select * from admin where mail='$rmail' and scode='$scode' ");
if(mysqli_num_rows($result)>0)
 {
 $row=mysqli_fetch_assoc($result);
 header('Location: areset.php');
 }
else 
 {
  echo "invalid mailid".mysqli_error($con);
  header('Location: aresetpassword.php');
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