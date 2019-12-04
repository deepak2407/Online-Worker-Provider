<?php
   if(isset($_POST['subw']))
  {
   $fname=$_POST['fname'];
   $lname=$_POST['lname'];
   $age=$_POST['age'];
   $radio=$_POST['radio'];
   $work=$_POST['work'];
   $phno=$_POST['phno'];
   $mail=$_POST['mail'];
   $pwd=$_POST['pwd'];
   $wage=$_POST['wage'];
$con = mysqli_connect("localhost","root","","project","3306");
    if (!mysqli_connect_errno())
    {
		 $result=mysqli_query($con,"insert into worker values('$fname','$lname','$age','$radio','$work',$phno,'$mail', '$pwd','$wage')");
      if($result)
	   {
     header('Location: manageworker.php');

     //mysqli_query($con,"insert into user(fname,lname,phno,mail,pwd) value ('$fname','$lname','$phno','$mail','$pwd')");
     //echo "record inserted successfully";  
	 //header('Location: index.html');
      }
    else
	{
     echo mysqli_error($con);
	}
  }
  else
	   echo mysqli_error($con);
       mysqli_close($con);
  }
else
  echo 'error in reading from html page';
  ?>