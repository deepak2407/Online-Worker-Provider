<?php
if(isset($_GET['sub']))
{
$fname=$_GET['fname'];
$lname=$_GET['lname'];
$phno=$_GET['phno'];

$mail=$_GET['mail'];
$password=$_GET['password'];

 $con = mysqli_connect("localhost","root","","project","3306");
 if (!mysqli_connect_errno())
   {
//insert into admin value('fname','lname',age,'gender','adminid','password'
$result=mysqli_query($con,"update  admin set fname='$fname',lname='$lname',phno=$phno,pwd='$password' where mail='$mail'");
if($result)
{
// printf("Admin registred successfully");
header('Location: adminaccount.php');
}
else
{
  echo "profile retrieval failed";
echo mysqli_error($con);
//header('Location: adminregistration.php');
}

   }
else
   echo mysqli_error($con);
mysqli_close($con); 
}
else
  echo 'error in admin profile update';
  ?>