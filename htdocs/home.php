<?php
session_start();
?>
<html>
<head>
<title>Home</title>
<style>
    a{
        
        text-decoration: none;
    }

#panel,#flip,#panel1,#flip1,#panel2,#flip2{
padding:5px;
text-align:center;
background-color:powderblue;
border:1px solid grey;
width:800px;
margin-left:250px;
}
#panel,#panel1,#panel2{
padding:5px;

height: 200px;
}
h3{
    color:darkgreen;
}
#container ul{
list-style:none;
margin-left:0px;
padding-left: 0px;
}
#container li{
float:left;
display:block;
background-color:black;
border:1px solid red;
width:146px;
color:white;
text-align:center;
height:40px;
line-height:40px;
position: relative;
}
#container li,a{
float:left;
display:block;
background-color:black;
width:146px;
color:white;
text-align:center;
height:40px;
line-height:40px;
}
#container ul ul {
display:none;
margin-left:0px;
padding-left:0px;
}
#container ul li:hover{
background-color:orange;
color:black;
border:1px solid orange;
}
#container ul a:hover{
background-color:orange;
color:black;
border:1px red;
}
#container ul li:hover > ul {
display:block;
}
h2{
    margin-left: 543px;
    color:crimson;
}
table{
    margin-top:10px;
    margin-left: 320px;
}
table th,td{
    
    padding:10px;
}
.img11{
   float:left;

}

</style>

</head>
<body>
<form>
    <center>
<img src="logo2.png">
<div id="container">
<ul>
    <li ><a href="home.php" >HOME</a></li>

<li>EVENT
<ul>
<li><a href="eventreg.php">REGISTER</a></li>
<li><a href="viewreg.php">VIEW</a></li>
</ul>
<li><a href="logout.php">LOGOUT</a></li>
</div>
</center>

<br>
<br>
<br>

    <h2>"<?php
        
     echo"Welcome". "&nbsp&nbsp". $_SESSION['fname'];
        ?>"
        </h2>


<br>

<div id="flip"><label><b>Your Profile</b></label></div>
<div id="panel">
   <img  class="img11"width="180" height="180" src='<?= $_SESSION['img']?>'>
<table>
<tr>
<tr>
    <td><b>Firstname:</b></td>
<td>
<?php
echo$_SESSION['fname'];
?>

</td>
</tr>
<tr>
    <td><b>Lastname:</b></td>

<td><?php
echo$_SESSION['lname'];
?>    </td>
</tr>
<tr>
    <td><b>Email:</b></td>

<td> <?php
echo$_SESSION['mail'];
?>   </td>
</tr>


</table>




    </body>
</html>