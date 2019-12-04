<?php include "adminheader.php" ?>
<style>
            input[type=text], select {
                width: 100%;
                padding: 12px 20px;
                margin: 8px 0;
                display: inline-block;
                border: 1px solid #ccc;
                border-radius: 4px;
                box-sizing: border-box;
            }
        </style>
<div id="content_ext">
    <center>
<div style="margin-top: 100px;font-size:1.3em;font-family: candara;background:#607B8B;color:white;">EDIT WORKER DETAILS</div>
        <div style="border-radius: 5px;background-color:#607B8B;padding-top:10px;padding-bottom: 10px;width:60%;margin-top: 100px;">
            <form action="workeredit1.php">
                       <?php
           //         if(isset($_GET['edit']))
        //           {
                       $mail=$_GET["pid"];
          $con = mysqli_connect("localhost", "root", "", "project", "3306");
                    if (!mysqli_connect_errno()) {
                 $result = mysqli_query($con, "select * from worker where mail='$mail'");
                            $row = mysqli_fetch_assoc($result) 
                                ?>
            <table style="margin-top: 50px;margin-bottom: 50px;" width="500">
              <tr><td>First Name<input type="text" name="fname" id="fname" value="<?php echo $row["fname"] ?>" placeholder="First Name">
               Last Name<tr><td><input type="text" name="lname" id="lname" value="<?php echo $row["lname"] ?>" placeholder="Last Name">
				Age<tr><td><input type="text" name="age" id="age" value="<?php echo $row["age"] ?>" placeholder="age">
                Worktype<tr><td><input type="text" name="worktype" id="worktype" value="<?php echo $row["worktype"] ?>" placeholder="worktype">
                Phone Number<tr><td><input type="text" name="phno" id="phno" value="<?php echo $row["phno"] ?>" placeholder="phno">
                 Wage<tr><td><input type="text" name="wage" id="wage" value="<?php echo $row["wage"] ?>" placeholder="wage">
				 Mail<tr><td><input type="text" name="mail" id="mail" value="<?php echo $row["mail"] ?>" placeholder="mail" readonly>
                Password<tr><td><input type="text" name="password" id="password" value="<?php echo $row["pwd"] ?>" placeholder="password">
                <tr><td><button value="submit" name="sub">submit</button>

            </table>
                    <?php
}
else
{
echo mysqli_error($con);
}
                    mysqli_close($con);
	
//}
                           ?>
               </form>
        </div>
    </center>
</div>
<?php include "footer.php" ?>