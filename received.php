<script type="text/javascript">

    function deletefun(id)
    {
        // alert(id);
        window.location = 'messagedelete.php?id=' + id;
    }
	function replyfun(id)
    {
        // alert(id);
        window.location = 'replymessage.php?mid='+id;
    }
</script>

<?php include "userheader.php" ?>
<div id="content">
<?php
 $con = mysqli_connect("localhost","root","","project","3306");
 if (!mysqli_connect_errno())
   {
//session_start();
$userid=$_SESSION['mail'];
$result=mysqli_query($con,"select * from chatt where msgto='$userid'");
if(mysqli_num_rows($result)>0)
{
?>
<table class="report"  width="1200" align=center>
<thead class="reports">
<tr><td>Sno<td>Message From<td>Message<td>send reply<td>Delete</tr>
</thead>
<?php

$n=1;
 while ($row = mysqli_fetch_assoc($result)) {
                                ?>
<tr>
                                    <td><?php echo ($n++) ?></td>    
                                    <td><?php echo $row["msgfrom"] ?></td>    
                                    <td><?php echo $row["message"] ?></td>
<td><button type='button'  name='reply' id='reply' onclick = "replyfun('<?php echo $row["msgfrom"] ?>')">Reply</button></td>

									<td><button type='button'  name='delete' id='delete' onclick = "deletefun('<?php echo $row["id"] ?>')">Delete</button></td>

</tr>
<?php
                                }
   }
else
{
 echo "no messagese received";
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
<?php include "footer.php";  ?>