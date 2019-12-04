<?php
session_start();
if(isset($_SESSION['alogin'])&& $_SESSION['alogin']==true)
{
 $_SESSION['alogin']=false;
 session_unset();
 session_destroy();
}
header('Location:index.php');
?>