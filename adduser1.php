<?php
   if(isset($_POST['sub']))
  {
   $fname=$_POST['fname'];
   $lname=$_POST['lname'];
   $phno=$_POST['phno'];
   $mail=$_POST['mail'];
   $pwd=$_POST['pwd'];
$con = mysqli_connect("localhost","root","","project","3306");
    if (!mysqli_connect_errno())
    {
		 $result=mysqli_query($con,"insert into user values('$fname','$lname',$phno,'$mail', '$pwd')");
      if($result)
	   {
     header('Location: manageuser.php');

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