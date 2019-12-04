<?php include "userheader.php" ?>
<head>

<script type="text/javascript">

    function deletefun(id)
    {
        // alert(id);
        window.location = 'MessageDelete.php?id=' + id;
    }
</script>
</head>
<body>
<div id="content">
<?php
 $con = mysqli_connect("localhost","root","","project","3306");
 if (!mysqli_connect_errno())
   {
//session_start();
$userid=$_SESSION['mail'];
$result=mysqli_query($con,"select * from chatt where msgfrom='$userid'");
if(mysqli_num_rows($result)>0)
{
?>
<table class="report"  width="1200" align=center>
<thead class="reports">
<tr><td>Sno<td>Message To<td>Message<td>Delete</tr>
</thead>
<?php
//$row=mysqli_fetch_assoc($result);
$n=1;
 while ($row = mysqli_fetch_assoc($result)) {
                                ?>
<tr>
                                    <td><?php echo ($n++) ?></td>    
                                    <td><?php echo $row["msgto"] ?></td>    
                                    <td><?php echo $row["message"] ?></td>
<td><button type='button'  name='delete' id='delete' onclick = "deletefun('<?php echo $row["id"] ?>')">Delete</button></td>
</tr>
<?php
                                }
   }
else
{
 echo "no messagese sent";
}
}
else
{
   echo mysqli_error($con);
mysqli_close($con); 
}
?>
</table>
</div>
</body>
<?php include "footer.php";  ?>