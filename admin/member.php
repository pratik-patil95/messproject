<?php
mysql_connect("localhost","root","")or die("Unable to connect");
mysql_select_db("mess_development");
$sql="select * from reg";
$records=mysql_query($sql);
?>
<html>
<head><title>Member</title></head>
<body bgcolor="#FFF380">
<form method="POST" action="search.php">
Search Specific Rollno : <input type="text" name="rollno"/><input type="submit" name="search" value="search"/>
<p/>
<table width="1350" border="5" cellpadding="3" cellspacing="3">
<tr>
<th>Name</th>
<th>Rollno</th>
<th>Address</th>
<th>Email</th>
<th>Phone</th>
<th>Password</th>
</tr>

<?php
	while($register=mysql_fetch_assoc($records)) {
		echo "<tr>";
		echo "<td><center>".$register["name"]."</td>";
		echo "<td><center>".$register["rollno"]."</td>";
		echo "<td><center>".$register["address"]."</td>";
		echo "<td><center>".$register["email"]."</td>";
		echo "<td><center>".$register["phone"]."</td>";
		echo "<td><center>".$register["password"]."</td>";
		echo "</tr>";

}
?>
</table>
<center><a href="new.html"><h3>Home</h3></a></center>
</form>
</body>
</html>