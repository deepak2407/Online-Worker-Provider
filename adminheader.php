<html>
<head>
<title>OLP</title>
        <link rel="stylesheet" href="css/header.css" type="text/css">

</head>
<body>
<div class="wrapper row1">
  <header id="header" class="clear" >
    <div id="hgroup">
      <h1><a href="adminaccount.php">ONLINE LABOUR PROVIDER</a></h1>
    </div>
	
    <nav>
      <ul>
	  <?php
session_start();
if(!isset($_SESSION['alogin']) || !$_SESSION['alogin']==true)
{
 header('Location:index.php');
}
$name="admin";
$_SESSION['name']=$name;
$aname=$_SESSION['aname'];
?>
        <li><a href="adminaccount.php">HOME</a></li>
		<li id="emplogin" style='width:20px;float:right;'><a href="adminlogout.php">logout</a></li>
        <li id="emplogin"><a href="adminprofile.php">Profile</a></li>
        <li id="admlogin"><a href="manageworker.php">Manage Workers</a></li>
		<li id="admlogin"><a href="manageuser.php">Manage Users</a></li>
		<li id="admin" style='width:150px;float:right;'><?php echo 'Welcome, '.$aname; ?></li>
      </ul>
    </nav>
  </header>
</div>
</body>
</html>