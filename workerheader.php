<html>
<head>
<title>OLP</title>
        <link rel="stylesheet" href="css/header.css" type="text/css">

</head>
<body>
<div class="wrapper row1">
  <header id="header" class="clear" >
    <div id="hgroup">
      <h1><a href="workeraccount.php">ONLINE LABOUR PROVIDER</a></h1>
    </div>
	
    <nav style='margin:5;'>
      <ul>
	  <?php
session_start();
if(!isset($_SESSION['wlogin']) || !$_SESSION['wlogin']==true)
{
 header('Location:index.php');
}
$aname=$_SESSION['aname'];
?>
        <li><a href="workeraccount.php">HOME</a></li>
		<li id="emplogin" style='width:40px;float:right;'><a href="workerlogout.php">logout</a></li>
        <li id="emplogin"><a href="workerprofile.php">Profile</a></li>
		<li id="index"><a href="wsent.php">Sent</a></li>
        <li id="index"><a href="wreceived.php">Received</a></li>
	    <li id="index"><a href="wmessage.php">Message</a></li>	
	    
		<li id="admin" style='width:250px;float:right;'><?php echo 'Welcome, '.$aname; ?></li>
      </ul>
    </nav>
  </header>
</div>
</body>
</html>