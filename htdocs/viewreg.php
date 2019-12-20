
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

height: 400px;
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
    
<div id="flip"><label><b>EVENTS</b></label></div>
<div id="panel">
     <?php
    session_start();
$db = mysqli_connect("127.0.0.1","root","","event");
   
        
       $u=$_SESSION['mail'];
        
       
     $result= mysqli_query($db,"SELECT * FROM eventreg where email='$u'");
   while($row = mysqli_fetch_array($result))
{
echo "<table border='1'>
<tr>
<th>Event Name</th>
<th>Event Place</th>
<th>Event Date</th>

</tr>";


echo "<tr>";
echo "<td>" . $row['ename'] . "</td>";
echo "<td>" . $row['eplace'] . "</td>";
echo "<td>" . $row['edate'] . "</td>";
echo "</tr>";
echo "
<tr>
<th>Guest Name</th>

<th>Image</th>

</tr>";
echo "<tr>";
echo "<td>" . $row['g1name'] . "</td>";
//echo "<td>" . $row['g1time'] . "</td>";
echo "<td> <img width=180 height=180 src=".$row['avatar1']."> </td>";
echo "</tr>";
echo "<tr>";
echo "<td>" . $row['g2name'] . "</td>";
//echo "<td>" . $row['g2time'] . "</td>";
echo "<td> <img width=180 height=180 src=".$row['avatar2']."> </td>";
echo "</tr>";echo "<tr>";
echo "<td>" . $row['g3name'] . "</td>";
echo "<td>" . $row['g3time'] . "</td>";
//echo "<td> <img width=180 height=180 src=".$row['avatar3']."> </td>";
echo "</tr>";
}
echo "</table>";

mysqli_close($con);
?>
    
    
 

</div>

</form>
    </body>
</html>
    
  