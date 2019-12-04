<?php include "header.php"
?>
<html>
<head>
<title>Registration</title>
<link href="css/styleregister.css" rel="stylesheet" type="text/css" media="all">
<!-- //css files -->
</head>
<body>
<div class="main" name='main'>
	<h2 class="sub-head" name='sub-head'>Sign Up</h2>
		<div class="sub-main" name='sub-main'>	
			<form action="workerregister1.php" method="post">
				<input placeholder="First Name" name="fname"  type="text" required="">
				<input placeholder="Last Name" name="lname" type="text" required="">
				<input placeholder="age" name="age" type="text" required=""><br>
				 <input name="radio" type="radio" value="male" required="">Male
				 <input name="radio" type="radio" value="female" required="">Female
				 <input placeholder="work type" name="work" type="text" required=""><br>
				<input placeholder="Phone Number" name="phno"  type="text" required="">
				<input placeholder="Email" name="mail"  type="text" required="">
				<input  placeholder="Password" name="pwd"  type="password" required="">			
				<input placeholder="wage" name="wage" type="text" required=""><br>
				<input type="submit" name="subw" value="sign up">
			</form>
		</div>
</div>
<!--//main-->
</body>
</html>
<?php include "footer.php" ?>
