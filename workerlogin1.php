<?php
if(isset($_POST['subw']))
{
 $mail=$_POST['mail'];
 $pwd=$_POST['pwd'];
 $con = mysqli_connect("localhost","root","","project","3306");
 if (!mysqli_connect_errno())
   {
$result=mysqli_query($con,"select * from worker where mail='$mail' and pwd='$pwd'");
if(mysqli_num_rows($result)>0)
 {
 $row=mysqli_fetch_assoc($result);
 session_start();
  $_SESSION['wlogin']=true;
 $_SESSION['mail']=$mail;
 $_SESSION['aname']=$row["fname"]." ".$row["lname"];
 echo "count is:".mysqli_num_rows($result);
 header('Location: workeraccount.php');
 }
else 
 {
  echo "invalid mailid/password".mysqli_error($con);
  header('Location: workerlogin.php');
 }
}
else
{
   echo mysqli_error();
   mysqli_close($con); 
}
}
else
  echo 'error in login page';
   
?>