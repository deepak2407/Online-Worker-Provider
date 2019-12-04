<?php include "userheader.php" ?>
<html>
<div id="content_ext">
<head>
<title>OLP</title>
        <link rel="stylesheet" href="css/manageworker.css" type="text/css">
</title>
<script>
    function viewfun(id)
    {
        window.location = 'smessage.php?sid='+id;
    }
	</script>
</head>
<body >
    <center>  <u><div style="font-size: 1.9em;color:#FF6600;padding:10px;margin-top:10px;">
                <b>searched details </b></div> </u>
        <div style="border-radius: 5px;background-color: #f2f2f2;padding:20px;width:1250px; margin-top: 40px;">

            <form name="department"  method="post" >
			
                <table class="report"  width="1200" align=center>
					<thead class="reports">
					<tr><td>sno<td>Worker name<td>mail<td>phone number<td>request</tr>
					</thead>
					<tbody>

                    <?php
					
                    $n =1;
					$worktype=$_POST['srch'];
                    $con = mysqli_connect("localhost", "root", "", "project", "3306");
                    if (!mysqli_connect_errno()) 
					{
                        $result = mysqli_query($con, "select * from worker where worktype='$worktype'");
                        if (mysqli_num_rows($result) > 0)
							{

                            while ($row = mysqli_fetch_assoc($result))
								{
                                ?>
								
								<tr>
                                    <td><?php echo ($n++) ?></td>    
                                    
                                    <td><?php echo $row["fname"]; ?></td>
		                            <td><?php echo $row["mail"]?></td> 
									<td><?php echo $row["phno"] ?></td>
			
													
                                    <td><button type='button' name='chat'  onclick="viewfun('<?php echo $row["mail"] ?>')" class='addbtn'
									               >send details</button></td>
								</tr>
								</form>
							<?php
							    }
                            }
                        }
                        echo mysqli_error($con);
					
                    ?>
					</tbody>
</table> 
                    <?php
                    mysqli_close($con);
                    ?>
            </form>
        </div>
    </center>
	</body>
</div>
</html>
<?php include "footer.php" ?>