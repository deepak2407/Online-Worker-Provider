<?php include "header.php"
?>
<html>
<head>
<title>Reset Password Form</title>
<link href="css/reset.css" rel="stylesheet" type="text/css" media="all"/>

</head>
<body>

<?php
session_start();
$name=$_SESSION['name'];
?>

<div class="elelment">
	
	<div class="element-main">
		<h1>Forgot Password?</h1>
		<form action="resetpassword1.php">
			<input type="text" name="rmail" value="Your e-mail address" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Your e-mail address';}">
			<input type="submit" name="rsub" value="Reset my Password">
		</form>
	</div>
</div>
</body>
</html>
<?php include "footer.php" ?>