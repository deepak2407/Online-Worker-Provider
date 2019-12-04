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
$result=mysqli_query($con,"update  user set fname='$fname',lname='$lname',phno='$phno',pwd='$password' where mail='$mail'");
if($result)
{
echo "<script>details updated successfully</script>";
header('Location: manageuser.php');
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
  echo 'error in details updation';
  ?>