<?php
   if(isset($_POST['sub']))
  {
   $fname=$_POST['fname'];
   $lname=$_POST['lname'];
   $phno=$_POST['phno'];
   $mail=$_POST['mail'];
   $pwd=$_POST['pwd'];
   $code=$_POST['code'];
$con = mysqli_connect("localhost","root","","project","3306");
    if (!mysqli_connect_errno())
    {
		 $result=mysqli_query($con,"insert into admin values('$fname','$lname',$phno,'$mail', '$pwd','$code')");
      if($result)
	   {
     header('Location: adminlogin.php');

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