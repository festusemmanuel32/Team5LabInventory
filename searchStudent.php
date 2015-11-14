<html>
<head>
<title>Results Page</title>
</head>

<div class = "center">
<body>
<head>
<p style = "text-align:center; font-size: 30px"><b>Search Results<b></p>
</div>
<div class = "center1" style="text-align:center" >

<?php
include_once("searchTest.php");

$obj=new students();
$search="";
if(isset($_REQUEST['ID'])){
$ID=$_REQUEST['ID'];
}
$obj->search($ID);
echo "<table border='2'>";
echo "<tr style='background-color:Blue; color:Red; text-align:center'>

<td>FirstName</td>
<td>MiddleName</td>
<td>LastName</td>
<td>IDr</td>
<td>Description</td>
<td>DOB</td>
</tr>";
								
$row=$obj->fetch();
$style="";
$i=0;
while($row){
if($i%2==0){
$style="style='background-color:Blue'";
}else{
$style="";
}
echo "<tr $style >";
echo "<td><span class='clickspot' onclick='getDesc({$row['ID']})'>{$row['FistName']}<span></td>";
echo "<td>{$row['FirstName']}</td>";
echo "<td>{$row['MiddleName']}</td>";
echo "<td>{$row['LastName']}</td>";
echo "<td>{$row['ID']}</td>";
echo "<td>{$row['Description']}</td>";
echo "<td>{$row['DOB']}</td>";
echo "</tr>";

$row=$obj->fetch();
$i++;
}

if(isset($_REQUEST['ID'])){
echo $_REQUEST ['ID'];
$obj =new student();
$ID=$_REQUEST['ID'];
}

?>    
</div>
</body>
</html>








						