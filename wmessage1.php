<?php
if(isset($_POST['subw']))
{
session_start();
$msgfrom=$_SESSION['mail'];
$msgto=$_POST['msgto'];
$message=$_POST['msg'];

 $con = mysqli_connect("localhost","root","","project","3306");
 if (!mysqli_connect_errno())
   {
$result=mysqli_query($con,"insert into chatt (msgfrom,msgto,message) values ('$msgfrom','$msgto','$message')");

mysqli_close($con); 
header('Location: workeraccount.php');
   }
else
{
 echo "connect error".mysqli_error($con);
 mysqli_close($con); 
}
}
else
  echo 'error in message page';
  ?>