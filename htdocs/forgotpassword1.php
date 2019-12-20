<?php
session_start();
include'configuration.php';
if(isset($_POST['submit']))
{
    $subject="one time password";
    $name="Naveen";
    $email1=$_POST['email'];
    $email="project.silkbuzz@gmail.com";
    $result=mysqli_query($db,"select * from signup where MAIL_ID='$email1'") or die(mysqli_error($db));
    $row=  mysqli_num_rows($result);
   $_SESSION['recovery_mail']=$email1;
    if($row>0)
    {
        $random=rand(1000,9999);
        $message="Your one time password is ".$random;
         
       
       $_SESSION['random']=$random;
     //mail("nk30284@gmail.com",$subject, $message,"From: ".$name." <".$email.">\r\n"."Reply-To: ".$email."\r\n"."X-Mailer: PHP/" . phpversion());
     
mail($email1,$subject, $message,"From: ".$name." <".$email.">\r\n"."Reply-To: ".$email."\r\n"."X-Mailer: PHP/" . phpversion());

	
      echo'<script>alert("otp has been send to your mail id")</script>';
      echo'<script>location.href="forgot-password.php"</script>';
    }
    else
    {
    echo '<script>alert("mail id doesnot exist")</script>';
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
     <form action="forgot_password1.php" method="post">
				<input type="email" placeholder="Enter your mail-id" name="email"><br>
				
                                <input type="submit" value="Submit" name="submit">
                    </form>
        
        
        
        
    </center>
    </body>
</html>
