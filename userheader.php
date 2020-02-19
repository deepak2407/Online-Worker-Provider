<html>
<head>
<title>OLP</title>
        <link rel="stylesheet" href="css/header.css" type="text/css">

</head>
<body>

<div class="wrapper row1">
  <header id="header" class="clear" >
    <div id="hgroup" >
      <h1><a href="useraccount.php">ONLINE WORKER PROVIDER</a></h1>
    </div>
	<form id="emplogin" action="search.php" method="post">
            <input type="text" name="srch" placeholder="Search..." required>
            <input type="submit" name="ssub" value="Search">
</form>
    <nav style='margin:10;padding:10px 0;width:100%;'>
      <ul>
	  <?php
session_start();
if(!isset($_SESSION['ulogin']) || !$_SESSION['ulogin']==true)
{
 header('Location:index.php');
}
$aname=$_SESSION['aname'];
?>
        <li><a href="useraccount.php">HOME</a></li>
		<li id="emplogin" style='width:40px;float:right;'><a href="userlogout.php">logout</a></li>
        <li id="emplogin"><a href="userprofile.php">Profile</a></li>
		<li id="index"><a href="sent.php">Sent</a></li>
        <li id="index"><a href="received.php">Received</a></li>
	    <li id="index"><a href="message.php">Message</a></li>
		
	    <li id="admin" style='width:150px;float:right;'><?php echo 'Welcome, '.$aname; ?></li>
      </ul>
    </nav>
  </header>
</div>

</body>
</html>
