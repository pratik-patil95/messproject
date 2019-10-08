
<?php
mysql_connect("localhost","root","")or die("Unable to connect");
mysql_select_db("mess_development");
$sql="select * from brkorders";
$res=mysql_query($sql);
?>
<html>
<head><title>Order</title></head>
<body bgcolor="#ffffb3">
<form action="" method="Post">
<center>From : <input type="date" name="fromdate" />
To : <input type="date" name="todate" />
<input type="Submit" value="Submit" name="submit"/><br>
<br/>
Enter the id to delete :-<input type="text" name="id"/>
<input type="Submit" value="delete" name="delete"/>
</center>
</form>
<table width="1350" border="5" cellpadding="3" cellspacing="1">
<tr>
<th>Order Id</th>
<th>Shira Quantity</th>
<th>Omlet Quantity</th>
<th>Dosa Quantity</th>
<th>Total Quantity</th>
<th>Date</th>
<th>Bill</th>
<th>Roll No.</th>

</tr>

<?php
if(isset($_POST['submit']))
{
$x=$_POST['fromdate'];
$y=$_POST['todate'];
echo "$x to $y";

$qry="SELECT * from brkorders WHERE date BETWEEN '$x' AND '$y'";
$res=mysql_query($qry);
$total=0;
	while($menu=mysql_fetch_assoc($res)) {
		
		echo "<tr>";
		echo "<td><center>".$menu["id"]."</td>";
		echo "<td><center>".$menu["shira_q"]."</td>";
		echo "<td><center>".$menu["omlet_q"]."</td>";
		echo "<td><center>".$menu["dosa_q"]."</td>";
		echo "<td><center>".$menu["quantity"]."</td>";
		echo "<td><center>".$menu["Date"]."</td>";
		echo "<td><center>".$menu["bill"]."</td>";
		echo "<td><center>".$menu["roll_no"]."</td>";
		echo "</tr>";
		$total=$total+$menu["bill"];
}
echo "<tr><center><h4>Total=".$total."</h4></tr>";
}
if(isset($_POST['delete']))
{
$x=$_POST['id'];
echo $x;
$sql="delete from brkorders where id='$x'";
mysql_query($sql);
}

?>
</form>
</table>
<center><a href="new.html"/><h3>Home</h3></a></center>
</body>
</html>

