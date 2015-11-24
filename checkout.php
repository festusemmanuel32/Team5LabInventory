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
<li><a href = 'checkout.php'>Check Out </a></li>
<li><a href = 'per.php'>Search for User </a></li><br>
</div>

<div class= "center2">
<p style = "font-size: 25px">Check Out</p>
<table border="0" cellpadding="2" cellspacing="5" bgcolor="#eeeeee" style="text-align:center">
<th colspan="2" align="center">Check Out</th>

<form action ="checkout.php" method = "GET" style="text-align:center">
<tr><td>student Id</td>
<td><input type ="text" name ="sid"></td></tr>

<tr><td>Lab Id</td>
<td> <input type = "text" name = "lid"></td></tr>

<tr><td>Equipment ID</td>
<td> <input type = "text" name = "ei"></td></tr>

<tr><td>Date of Check Out</td>
<td> <input type = "date" name = "da"></td></tr>

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
    $date_checkout=$_REQUEST['da'];

    if(!$obj->checkout($student_id,$lab_id,$equip_id,$date_checkout))
    {

        echo "Error processing request!".mysql_error();
}
else
{
	echo " Equipment with $equip_id was checked out by user with id &student_id from lab
    $lab_id at $date_checkout successfully";

}
}

?>
</div>
</body>
</html>
