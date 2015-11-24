<html>
<head>
<title>Index</title>
<link rel="stylesheet" href="css/s.css" >
</head>

<div class = "center">
<div class = "rh">
<a  href="#"><b>Login</b></a>
</div>

<body>
<head>
<img style="position: absolute; top: -1%; left:22%; margin: 30px -30px -30px 30px;"
	 src="Ashesi.jpg" width="120" />

<p style = "text-align:center; font-size: 30px"><b>Ashesi University College<b></p>
<p style = "text-align:center ; font-size: 25px"><b>Inventory Management System<b></p>
<nav>

<ul>
<li><a href="index.php">Home</a></li>
<li><a href="la.php">Laboratories</a></li>
<li><a href="m.php">Suppliers</a></li>
<li><a href="per.php">Users</a></li>
</ul>
</nav>
</head>
</div>

<div class = "center1" style="text-align:center" >
<br><ul class = 'm'>
<li><a href = 'checkin.php'>Check In </a></li>
<li><a href = 'per.php'>Search for User </a></li><br>
</div>

<div class= "center2">
<p style = "font-size: 25px">Check In</p>
<table border="0" cellpadding="2" cellspacing="5" bgcolor="#eeeeee" style="text-align:center">
<th colspan="2" align="center">Check In</th>

<form action ="checkin.php" method = "GET" style="text-align:center">
<tr><td>Student Id</td>
<td><input type ="text" name ="sid"></td></tr>

<tr><td>Lab Id</td>
<td> <input type = "text" name = "lid"></td></tr>

<tr><td>Equipment ID</td>
<td> <input type = "text" name = "ei"></td></tr>

<tr><td>Date of Check In</td>
<td> <input type = "text" name = "di"></td></tr>

<tr><td colspan="2" align="center"><input type ="submit" value= "Save"></td></tr>
</form>

</table>
</table>

<?php

if(isset($_REQUEST['pn']))
{
    include("labs.php");
    $obj = new labs();
    $student_id=$_REQUEST['sid'];
	$lab_id=$_REQUEST['lid'];
    $equip_id=$_REQUEST['ei'];
    $date_checkin=$_REQUEST['di'];

    if(!$obj->checkin($student_id,$lab_id,$equip_id,$date_checkin))
    {

        echo "Error processing request!".mysql_error();
}
else
{
	echo " Equipment with id $equip_id was checked in by user with id $student_id into
     lab &lab at $date_checkin successfully";
}
}

?>
</div>
</body>
</html>
