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
<li><a href = 'addlab.php'>Add Lab </a></li>
<li><a href = 'per.php'>Search for User </a></li><br>
</div>

<div class= "center2">
<p style = "font-size: 25px">Add Lab</p>
<table border="0" cellpadding="2" cellspacing="5" bgcolor="#eeeeee" style="text-align:center">
<th colspan="2" align="center">Add Lab</th>

<form action ="addlab.php" method = "GET" style="text-align:center">
<tr><td>Lab Name</td>
<td><input type ="text" name ="ln"></td></tr>

<tr><td>Lab Id</td>
<td> <input type = "text" name = "lid"></td></tr>

<tr><td>Lab Location</td>
<td> <input type = "text" name = "ll"></td></tr>

<tr><td>Lab Capacity</td>
<td> <input type = "text" name = "lc"></td></tr>

<tr><td>Equipment ID</td>
<td> <input type = "text" name = "ei"></td></tr>

<tr><td>Supplier ID</td>
<td> <input type = "text" name = "si"></td></tr>

<tr><td colspan="2" align="center"><input type ="submit" value= "Save"></td></tr>
</form>

</table>
</table>

<?php

if(isset($_REQUEST['pn']))
{
    include("labs.php");
    $obj = new labs();
    $lab_name=$_REQUEST['ln'];
	$lab_id=$_REQUEST['lid'];
	$lab_location=$_REQUEST['ll'];
	$lab_capacity=$_REQUEST['lc'];
    $equip_id=$_REQUEST['ei'];
    $supplierID=$_REQUEST['si'];

    if(!$obj->add_lab($lab_name,$lab_id,$lab_location,$lab_capacity,$equip_id,$supplierID))
    {

        echo "Error adding".mysql_error();
}
else
{
	echo " $lab_name, $lab_id, $lab_capacity, $lab_location, $equip_id & $supplierID have
	      successfully being added to the database";
}
}

?>
</div>
</body>
</html>
