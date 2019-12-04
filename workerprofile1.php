<?php
if(isset($_GET['sub']))
{
$fname=$_GET['fname'];
$lname=$_GET['lname'];
$age=$_GET['age'];
$worktype=$_GET['worktype'];
$phno=$_GET['phno'];
$wage=$_GET['wage'];
$mail=$_GET['mail'];
$password=$_GET['password'];


 $con = mysqli_connect("localhost","root","","project","3306");
 if (!mysqli_connect_errno())
   {
//insert into admin value('fname','lname',age,'gender','adminid','password'
$result=mysqli_query($con,"update  worker set fname='$fname',lname='$lname',age='$age',worktype='$worktype',phno='$phno',wage='$wage',pwd='$password' where mail='$mail'");
if($result)
{
// printf("Admin registred successfully");
header('Location: workeraccount.php');
}
else
{
  echo " worker profile retrieval failed";
echo mysqli_error($con);
//header('Location: adminregistration.php');
}

   }
else
   echo mysqli_error($con);
mysqli_close($con); 
}
else
  echo 'error in worker profile update';
  ?>