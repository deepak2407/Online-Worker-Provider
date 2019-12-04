<?php include "adminheader.php" ?>
<html>
<div id="content_ext">
<head>
<title>OLP</title>
        <link rel="stylesheet" href="css/manageworker.css" type="text/css">
</title>
</head>
<body >
    <center>  <u><div style="font-size: 1.9em;color:#FF6600;padding:10px;margin-top:10px;">
                <b> Worker details </b></div> </u>
            </form>
			
            <form name="department"  method="post" >
			
                <table class="report"  width="1200" align=center>
					<thead class="reports">
					<tr><td>sno<td>mail<td>worker Name<td>work type<td>age<td>wage<td>gender<td>phone number<td>password</tr>
					</thead>
					<tbody>

                    <?php

					
                     $user=$_GET["wid"];
					                    
                    $n = 1;
                    $con = mysqli_connect("localhost", "root", "", "project", "3306");
                    if (!mysqli_connect_errno()) 
					{                                                      /*where mail='$user'*/
                        $result = mysqli_query($con, "select * from worker where mail='$user'" );
                        if (mysqli_num_rows($result) > 0)
							{
                            $row = mysqli_fetch_assoc($result);
								
                                ?>
								
								<tr>
                                    <td><?php echo ($n++) ?></td>    
                                    <td><?php echo $row["mail"];?></td> 
                                    <td><?php echo $row["fname"] ?></td>
		                            <td><?php echo $row["worktype"] ?></td>
									<td><?php echo $row["age"] ?></td>
									<td><?php echo $row["wage"] ?></td>
									<td><?php echo $row["radio"] ?></td>
									<td><?php echo $row["phno"] ?></td>
                                    <td><?php echo $row["pwd"] ?></td>
								</tr>
								</form>
							<?php
							  
							    
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