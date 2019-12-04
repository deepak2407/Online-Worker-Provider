<?php
/*if(isset($_GET['edel']))
 {
session_start();
 $mail=$_SESSION['mail'];	*/
 $name=$_GET["pid"];

 $con = mysqli_connect("localhost","root","","project","3306");

 if (!mysqli_connect_errno())
   {echo "connection2";
$result=mysqli_query($con,"select * from worker  where mail='$name'");
if(mysqli_num_rows($result)>0)
 {
	 echo "connection3";
 $row=mysqli_fetch_assoc($result);
        $user=$row['mail'];      
 mysqli_query($con,"select * from worker where mail='$name' ");
                              
	 header("Location: workerprint.php?wid=$user");
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
