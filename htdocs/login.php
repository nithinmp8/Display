

<html>
    <head>
        <title>
            Login
               </title>
        <style>
            form{
               background-color:white;
                width:500px;
                border:2px solid blue;
                margin-left: 400px;
                margin-top:90px;
                padding-bottom: 20px;
            }
            input[type=email],input[type=password],input[type=text]{
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
                background-color: #6496c8;
                width:33%;
                display:block;
                padding:9px 25px;
                margin-top:0px;
                font-size:15px;
                font-family: "Bitter",serif;
                border:none;
            }
            .login:hover{
                background-color: #346392;
                
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
                   opacity: 0.6;
                   border:none;
            }
            .cancel:hover{
                opacity: 1;
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
            .username{
                text-transform: capitalize;
            }
            
            </style>
    </head>
    <body >
        <form name="" method="post">
           <h4>LOGIN </h4>
            <div class="container">
             
                <label>Username</label>
            <input type="text" name="username" class="username" placeholder="Enter Your name" >
                <label>Email</label>
                <input type="email" name="email" placeholder="Enter Your mail" required>
                <label>Password</label>
                <input type="password" name="password" placeholder="Enter Your password" required>
                <button type="submit" class="login" name="submit">LOGIN</button>
                
                
            </div>
             <div>
                 <button type="submit" name="cancel" class="cancel">CANCEL</button>

                <span class="psw"><a href="register.php">New User?</a></span>
            </div>
                   </form>      

    <?php
    if(isset($_POST['submit'])){
        
        //for mysql connection
$db = mysqli_connect("127.0.0.1","root","","event");
        
        //method to start session
        session_start();
        
        //store form input fields in a variable
        
        $email=$_POST['email'];
        $password=$_POST['password'];
        $username=$_POST['firstname'];
        //global session variable  .....you can use this variable on any page
        $_SESSION['user_id']=$username;
        
     
              //login  
        $result2= mysqli_query($db,"SELECT * FROM register WHERE email='$email' and password='$password'");
        
        while ($row= mysqli_fetch_array($result2)) {
        
        $_SESSION['fname']=$row['firstname'];
        $_SESSION['lname']=$row['lastname'];
        $_SESSION['mail']=$row['email'];
        $_SESSION['gen']=$row['gender']; 
        $_SESSION['img']=$row['avatar'];
        
        }
      
          
       //pan
       $result4= mysqli_query($db,"SELECT * FROM eventreg WHERE email='$email'");
       while($row= mysqli_fetch_array($result4)){
       $_SESSION['pename']=$row['ename'];
       $_SESSION['peplace']=$row['eplace'];
       $_SESSION['pedate']=$row['edate'];
       $_SESSION['pg1name']=$row['g1name'];
       $_SESSION['pg1time']=$row['g1time'];
       $_SESSION['pimg1']=$row['avatar1'];
       $_SESSION['pg2name']=$row['g2name'];
       $_SESSION['pg2time']=$row['g2time'];
       $_SESSION['pimg2']=$row['avatar2'];
       $_SESSION['pg3name']=$row['g3name'];
       $_SESSION['pg3time']=$row['g3time'];
       $_SESSION['pimg3']=$row['avatar3'];
       
       
  }
        
     
     
        //check number of extrated rows in database
        if (mysqli_num_rows($result2) != 0)
        {
            //redirect to another page if login success
            echo "<script> location.href='home.php' </script>";	
  
        }else{
            echo"<script>alert('invalid Email or password')</script>";
        }
    }
    
    ?>
       
    </body>
</html>