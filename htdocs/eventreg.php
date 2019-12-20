                      <?php

session_start();
?>
<html>
    <head>
        <title>
            Event Registration
               </title>
        <style>
            form{
               background-color:white;
               width:800px;
                margin-left: 200px;
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
            <h1>EVENT REGISTRATION </h1>
            <div>
                <br><label>Event Name</label>
                <input type="text" class="f" name="ename" placeholder="Enter Firstname" required>
                <br><label>Event Place</label>
                <input type="text" class="l"name="eplace" placeholder="Enter Lastname" required>  
                <br><label>Event Date</label>
                <input type="date" name="edate" required>
                <br><br><b><center><label>GUESTS</label></center></b>

                <br> <br> <table border="1">
                    <tr>
                        <td><label>Guest 1</label></td>
                        <td><input type="text" name="g1name" placeholder="Enter Guest Name" required></td>
                        <td><input type="time" name="g1time" placeholder="Enter Time"></td>
                        <td> <div class="avatar"><label>Upload Your image:</label><input type="file" name="avatar1" accept="image/*" required></div></td>
               
                    </tr>
                    <tr>
                        <td><label>Guest 2</label></td>
                        <td><input type="text" name="g2name" placeholder="Enter Guest Name"></td>
                        <td><input type="time" name="g2time" placeholder="Enter Time" ></td>
                        <td><div class="avatar"><label>Upload Your image:</label><input type="file" name="avatar2" accept="image/*"></div></td>
               
                    </tr>
                       <tr>
                        <td><label>Guest 3</label></td>
                        <td><input type="text" name="g3name" placeholder="Enter Guest Name"></td>
                        /<td><input type="time" name="g3time" placeholder="Enter Time" ></td>

                        <td> <div class="avatar"><label>Upload Your image:</label><input type="file" name="avatar3" accept="image/*"></div></td>
               
                       </tr>
                </table>
                <br><button type="submit" class="login" name="submit">SUBMIT</button>
                
                
            </div>
                      <?php

session_start();
$db = mysqli_connect("127.0.0.1","root","","event");
if(filter_input(INPUT_SERVER,'REQUEST_METHOD')=='POST'){
    
    $ename=filter_input(INPUT_POST,'ename');
    $eplace=filter_input(INPUT_POST,'eplace');
    $edate=filter_input(INPUT_POST,'edate');
    $g1name=filter_input(INPUT_POST,'g1name');
    $g1time=filter_input(INPUT_POST,'g1time');
$location1='login/'.$_FILES['avatar1']['name'];
move_uploaded_file($_FILES['avatar1']['tmp_name'], $location1);
    $g2name=filter_input(INPUT_POST,'g2name');
    $g2time=filter_input(INPUT_POST,'g2time');
$location2='login/'.$_FILES['avatar2']['name'];
move_uploaded_file($_FILES['avatar2']['tmp_name'], $location2);
    $g3name=filter_input(INPUT_POST,'g3name');
    $g3time=filter_input(INPUT_POST,'g3time');
$location3='login/'.$_FILES['avatar3']['name'];
move_uploaded_file($_FILES['avatar3']['tmp_name'], $location3);
  
  $result0=mysqli_query($db,"SELECT * FROM eventreg where ename='$ename'");
  
 if(mysqli_num_rows($result0)==0){
    $result= mysqli_query($db,"INSERT INTO eventreg(ename,eplace,edate,g1name,g1time,avatar1,g2name,g2time,avatar2,g3name,g3time,avatar3,email) VALUES ('$ename','$eplace','$edate','$g1name','$g1time','$location1','$g2name','$g2time','$location2','$g3name','$g3time','$location3','{$_SESSION['mail']}')") or die(mysqli_error($db));
   if($result==TRUE){
    
    $result1= mysqli_query($db,"SELECT * FROM eventreg ");
    
    while ($row= mysqli_fetch_array($result1)) {
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
   }

     echo"<script>location.href='home.php'</script>";
   

}else{
    echo"<script>alert('This Event already Registered')</script>";
}
}


?>
            
        </form>
    </body>
</html>