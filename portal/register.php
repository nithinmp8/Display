<html>
    <head>
        <title>
            Register
               </title>
        <style>
            form{
               background-color:white;
                width:500px;
                border:2px solid blue;
                margin-left: 400px;
                margin-top:50px;
                padding-bottom: 20px;
            }
            input[type=email],input[type=password],input[type="text"]{
                display: block;
                margin:10px 0px;
                width:100%;
                    padding:13px;
            }
            .container{
                padding:18px;
            }
            .login{
               
                color: #fff;
                background-color:  #346392;
                width:33%;
                display:block;
                padding:9px 25px;
               margin-top:0px;
                   font-size:15px;
                   font-family: "Bitter",serif;
                   
                   border:none;
            }
            .login:hover{
                background-color:#6496c8;
                
            }

            .cancel{
                
                color: #fff;
                background-color: red;
                width:30%;
                margin-left: 20px;
                padding:9px 25px;
               margin-top:0px;
                   font-size:15px;
                   font-family: "Bitter",serif;
                  
                   border:none;
            }
            .cancel:hover{
               opacity: 0.6;
            }
            span.psw{
                margin-top: 0px;
                float:right;
               margin-right:10px;
               margin-bottom:2px;
            }
            h4{
                margin-left:220px;
            }
            .f,.l{
                
                text-transform: capitalize;
            }
            .euser{
                color:green;
            }
            
            </style>
    </head>
    <body >
        <form  method="post" enctype="multipart/form-data">
           <h4>REGISTER </h4>
            <div class="container">
                                <label>Firstname</label>
                <input type="text" class="f" name="firstname" placeholder="Enter Firstname" required>
                                <label>Lastname</label>
                <input type="text" class="l"name="lastname" placeholder="Enter Lastname" required>  
                <label>Email</label>
                <input type="email" name="email" placeholder="Enter Your mail" required>
                <label>Password</label>
                <input type="password" name="password" placeholder="Enter Your password" required>
                <label>Gender:</label>
                Male<input type="radio" name="sex" value="male">
                Female<input type="radio" name="sex" value="female">
                <br><br>
                <div class="avatar"><label>Upload Your image:</label><input type="file" name="avatar" accept="image/*" required></div>
                <br><button type="submit" class="login" name="submit">REGISTER</button>
                
                
            </div>
             <div>
                 <button type="submit" name="cancel" class="cancel">CANCEL</button>
                
                <span class="psw">Existing &nbsp;<a class="euser"href="login.php">User?</a></span>
            </div>
           
           
           <?php

session_start();
include 'configuration.php';
if(filter_input(INPUT_SERVER,'REQUEST_METHOD')=='POST'){
    
    $firstname=filter_input(INPUT_POST,'firstname');
    $lastname=filter_input(INPUT_POST,'lastname');
    $email=filter_input(INPUT_POST,'email');
    $password=md5(filter_input(INPUT_POST,'password'));
    $gender=filter_input(INPUT_POST,'sex');
$location='login/'.$_FILES['avatar']['name'];
move_uploaded_file($_FILES['avatar']['tmp_name'], $location);
    
  
  $result0=mysqli_query($db,"SELECT * FROM register where email='$email'");
  if(mysqli_num_rows($result0)==0){
    $result= mysqli_query($db,"INSERT INTO register(firstname,lastname,email,password,gender,avatar) VALUES ('$firstname','$lastname','$email','$password','$gender','$location')") or die(mysqli_error());
   echo"<script>location.href='login.php'</script>";
}else{
    echo"<script>alert('This email already exists! please provide different email')</script>";
}
}


?>
                   </form>      
    </body>
</html>