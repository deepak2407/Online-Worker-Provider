<?php include "adminheader.php" ?>
<html>
<div id="content_ext">
<head>
<title>OLP</title>
        <link rel="stylesheet" href="css/manageworker.css" type="text/css">
</title>
<script>
function deletefun(id)
    {
        
        if (confirm("do you want to delete details details?" )) 
		 {
   window.location = 'userdelete.php?pid=' + id;
         } 
		 else
        {
   header('manageuser.php');
         } 
    }
    function editfun(id)
    {
        window.location = 'useredit.php?pid=' + id;
    }
    function viewfun(id)
    {
        window.location = 'userview.php?pid=' + id;
    }
	</script>
</head>
<body >
    <center>  <u><div style="font-size: 1.9em;color:#FF6600;padding:10px;margin-top:10px;">
                <b>Add / Edit User details </b></div> </u>
        <div style="border-radius: 5px;background-color: #f2f2f2;padding:20px;width:1250px; margin-top: 40px;">
            <form name="addworker" action="adduser.php" method="post">
                <div align="right"><button type="submit" class='addbtn'>Add user</button></div> 
            </form>

            <form name="department"  method="post" >
			
                <table class="report"  width="1200" align=center>
					<thead class="reports">
					<tr><td>Sno<td>mail<td>user Name<td>phone number<td>password<td>Edit<td>Delete<td>View</tr>
					</thead>
					<tbody>

                    <?php
                    $n = 1;
                    $con = mysqli_connect("localhost", "root", "", "project", "3306");
                    if (!mysqli_connect_errno()) 
					{
                        $result = mysqli_query($con, "select * from user");
                        if (mysqli_num_rows($result) > 0)
							{

                            while ($row = mysqli_fetch_assoc($result))
								{
                                ?>
								
								<tr>
                                    <td><?php echo ($n++) ?></td>    
                                    <td><?php echo $row["mail"]?></td> 
                                    <td><?php echo $row["fname"]; ?></td>
		                            <td><?php echo $row["phno"] ?></td>
									<td><?php echo $row["pwd"] ?></td>
									
                                    <td><button type='button' name='esub' onclick="editfun('<?php echo $row["mail"] ?>')" class='addbtn'
									              >Edit</button></td><
												  
                                    <td><button type='button' name='edel' onclick="deletefun('<?php echo $row["mail"] ?>')" class='addbtn'
									                >Delete</button></td>
													
                                    <td><button type='button' name='eview'  onclick="viewfun('<?php echo $row["mail"] ?>')" class='addbtn'
									               >view details</button></td>
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