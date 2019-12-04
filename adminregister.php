<?php include "header.php"
?>
<html>
<head>
<title>Admin Registration</title>
<link href="css/styleregister.css" rel="stylesheet" type="text/css" media="all">
<!-- //css files -->
</head>
<body>
<div class="main" name='main'>
	<h2 class="sub-head" name='sub-head'>Admin Sign Up</h2>
		<div class="sub-main" name='sub-main'>	
			<form action="adminregister1.php" method="post">
				<input placeholder="First Name" name="fname"  type="text" required="">
				<input placeholder="Last Name" name="lname" type="text" required="">
				<input placeholder="Phone Number" name="phno"  type="text" required="">
				<input placeholder="Email" name="mail"  type="text" required="">
				<input  placeholder="Password" name="pwd"  type="password" required="">
                <input  placeholder="secretcode" name="code"  type="password" required="">				
				<input type="submit" name="sub" value="sign up">
			</form>
		</div>
</div>
<!--//main-->
</body>
</html>
<?php include "footer.php" ?>
