<?php
session_start();
include 'configuration.php';
if(isset($_POST['submit']))
{
    $otp=$_POST['otp'];
    $newpass=$_POST['newpass'];
    $cpass=$_POST['cpass'];
    $otp1=$_SESSION['random'];
    $mail=$_SESSION['recovery_mail'];
    if($otp==$otp1)
    {
        if($newpass==$cpass)
        {
            $result=  mysqli_query($db,"update signup set PASSWORD='$newpass' where MAIL_ID='$mail'" ) or die(mysqli_error($db));
            echo'<script>alert("your password has been updated")</script>';
            echo'<script>location.href="index.php"</script>';
        }
        else{ 
            echo'<script>alert("both should have same value")</script>';
            //echo'<script>location.href="index.php"</script>';
        }
    }
    else
    {
            echo'<script>alert("Your otp is invalid")</script>';
           // echo'<script>location.href="index.php"</script>';   
    }
    
}
?>


<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
       
        <br><br><br><br><br><br><br><br><br>
    <center>
        <form action="forgot-password.php" method="post">
		<div class="login">
                                <input type="text" placeholder="Enter OTP" name="otp"><br>
				<input type="password" placeholder="new password" name="newpass"><br>
				<input type="password" placeholder="confirm password" name="cpass"><br>
				<input type="submit" value="Reset" name="submit">
		</div>
                </form>
        
        
        
    </center>
    </body>
</html>
