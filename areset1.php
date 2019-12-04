<?php
session_start();
$name=$_SESSION['name'];
if(isset($_GET['rsub1']))
{
 $rmail=$_GET['rmail'];	
 $pwd=$_GET['pwd'];
 $con = mysqli_connect("localhost","root","","project","3306");
 if (!mysqli_connect_errno())
   {
$result=mysqli_query($con,"select * from admin where mail='$rmail' ");
if(mysqli_num_rows($result)>0)
 {
 $row=mysqli_fetch_assoc($result);
 mysqli_query($con,"update admin set pwd='$pwd' where mail='$rmail' ");
	 header('Location: adminlogin.php');
 }
else 
 {
  echo "invalid mailid/password".mysqli_error($con);
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
{
  echo 'error in reset password page';
}
   
?>
