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
$result=mysqli_query($con,"update  worker set fname='$fname',lname='$lname',age='$age',worktype='$worktype',phno='$phno',wage='$wage',pwd='$password' where mail='$mail'");
if($result)
{
echo "<script> details updated successfully</script>";
header('Location: manageworker.php');
}
else
{
  echo "<script>alert('updating details failed');</script>";
echo mysqli_error($con);
//header('Location: BookAdd.php');
}

   }
else
   echo mysqli_error($con);
mysqli_close($con); 
}
else
  echo 'error in details updataion';
  ?>