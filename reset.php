<?php include "header.php"
?>
<html>
<head>
<title>Reset Password Form</title>
<link href="css/reset.css" rel="stylesheet" type="text/css" media="all"/>

</head>
<body>
<div class="elelment">
	
	<div class="element-main">
		<h1>Email verified</h1>
		<form action="reset1.php">
			<input type="text" name="rmail" value="Your e-mail address" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '';}">
			<input type="text" name="pwd" value="New password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'New password';}">
			<input type="submit" name="rsub1" value="Reset my Password">
		</form>
	</div>
</div>
</body>
</html>
<?php include "footer.php" ?>