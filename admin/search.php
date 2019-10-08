<?php
mysql_connect("localhost","root","")or die("Unable to connect");
mysql_select_db("mess_development");
$sql="select * from reg";
$records=mysql_query($sql);
?>
<body bgcolor="#FFF380">
<center><table width="1350" border="5" cellpadding="3" cellspacing="3">
<tr>
<th>Name</th>
<th>Rollno</th>
<th>Address</th>
<th>Email</th>
<th>Phone</th>
<th>Password</th>
</tr>

<?php


if(isset($_POST['search']))
{
$x=$_POST['rollno'];
//echo $x;
$sql="select * from reg where rollno='$x'";

$result=mysql_query($sql);
if (mysql_num_rows($result) > 0)
{
while($row=mysql_fetch_array($result))
{
	
print"<tr>";
print"<td><center>".$row['name']."</td>";
print "<td><center>".$row['rollno']."</td>";
print "<td><center>".$row['address']."</td>";
print "<td><center>".$row['email']."</td>";
print "<td><center>".$row['phone']."</td>";
print "<td><center>".$row['password']."</td>";
print"</tr>";
}
}
else
{
print"<h2>No Data available<h2></br>";
}
}
?>
</table>