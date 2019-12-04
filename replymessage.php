<!DOCTYPE html>
<?php include "userheader.php" ?>
<?php
$toid=$_GET['mid']; 
?>
        <style>
            input[type=text], select ,textarea{
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
        <div style="margin-top: 100px;font-size:1.3em;font-family: candara;background:red;color:white;">sending message page</div>
        <div style="border-radius: 5px;background-color:red;padding-top:10px;padding-bottom: 10px;width:60%;margin-top: 100px;">
            <form action="message1.php" method=post>
                
            <table style="margin-top: 50px;margin-bottom: 50px;" width="500">
                 <tr><td><input type="text" name="msgto" id="msgto"  placeholder="Receiver User Id" readonly>
                <tr><td><textarea cols=20 rows=4 name="msg" id="msg" placeholder="Message to Send"></textarea>
                <tr><td><button value="submit" name="sub">send</button>

            </table>

               </form>
        </div>
    </center>

</div>
<?php include "footer.php" ?>