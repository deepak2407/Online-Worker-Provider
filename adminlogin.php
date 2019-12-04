
<?php include "header.php"
?>
<html>
<head>
<title> USER LOGIN PAGE</title>
<link href="css/adminstyle.css" rel="stylesheet" type="text/css" media="all" />
</head>
<body>

<div class="message warning">
<div class="inset">
	<div class="login-head">
		<h1>Admin Login Form</h1>
		 			
	</div>
		<form action="adminlogin1.php" method="post">
			<li>
				<input type="text" class="text" name="mail" placeholder="Username" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Username';}"><a href="#" class=" icon user"></a>
			</li>
				<div class="clear"> </div>
			<li>
				<input type="password" name="pwd" placeholder="Password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}"> <a href="#" class="icon lock"></a>
			</li>
			<div class="clear"> </div>
			<div class="submit">
				<input type="submit" name="sub1" value="Sign in" >
				<h4><a href="aresetpassword.php">reset password?</a></h4>
			
								<h4><a href="adminregister.php">register?</a><h4>

						  <div class="clear">  </div>	
			</div>
				
		</form>
		</div>					
	</div>
	</div>
	<div class="clear"> </div>
</body>
</html
<?php include "footer.php" ?>