<?php include "adminheader.php"
?>
<html>
<div id="content_ext">
<head>
<title>User Registration</title>
<link href="css/styleregister.css" rel="stylesheet" type="text/css" media="all">
<!-- //css files -->
</head>
<body>
<div class="main" name='main'>
	<h2 class="sub-head" name='sub-head'>Add User</h2>
		<div class="sub-main" name='sub-main'>	
			<form action="adduser1.php" method="post">
				<input placeholder="First Name" name="fname"  type="text" required="">
				<input placeholder="Last Name" name="lname" type="text" required="">
				<input placeholder="Phone Number" name="phno"  type="text" required="">
				<input placeholder="Email" name="mail"  type="text" required="">
				<input  placeholder="Password" name="pwd"  type="password" required="">			
				<input type="submit" name="sub" value="add user">
			</form>
		</div>
</div>
<!--//main-->
</body>
</div>
</html>
<?php include "footer.php" ?>
