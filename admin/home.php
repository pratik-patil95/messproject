<html>
 <head> 
<title>Sign-Up</title>
 </head> 
 <body background="cd.jpg">
 <center>
 <br>
 <h1>Admin Registration Form..!</h1> <table border="0">
 <tr> <form  method="POST" action=""> 
 <td><h3>Enter Username:</h3></td><td><input type="text" name="username" required pattern="^[a-zA-Z]+$" title="Enter Alphabets"/></td></tr> 
 <tr>
<tr>
<td><h3>Enter Password:</h3></td><td><input type="password" name="password" required pattern="^[a-zA-Z0-9]+$" title="Enter Alphanumric"/></td>
</tr><br>
<tr>
<td colspan="5" align="center"><br><input type="submit" name="submit">
</td>
</tr>

</form>
</center>
</table>
<a href="login.php"><h2>sign_in</h2></a>
</body>
</html>




<?php 
$dbh=mysql_connect("localhost","root","") or die("Unable to connect");
$sdh=mysql_select_db("mess_development");

if(isset($_POST['submit']))
{
	$name=$_POST['username'] ;
	$password=$_POST['password'];
	
	$qry="insert into login_admin values('$name','$password')";
	if(mysql_query($qry))
	{
		echo "<h1>You have registered succesfully!!</h1>";
	}
		
}
mysql_close($dbh);	
?>