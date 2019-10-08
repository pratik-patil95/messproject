<html>
 <head> 
<title>Sign-Up</title>
 </head> 
 <body background="raner.jpg">
 <center>
 <br>
 <h1>Registration Form..!</h1> <table border="0">
 <tr> <form  method="POST" action=""> 
 <td><h3>Enter your Name:</h3></td><td><input type="text" name="name" placeholder="Name" required pattern="^[a-zA-Z]+$" title="Enter Alphabets"/></td></tr> 
 <tr>
<td><h3>Enter your Roll_no:</h3></td><td><input type="text" name="rollno" placeholder="Roll Number" required pattern="^[a-zA-Z0-9-]+$" title="Enter Alphanumric"/></td>
</tr>
<tr>
<td><h3>Enter your Address:</h3></td><td><input type="text" name="address" placeholder="Address" required pattern="^[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}+$" title="Enter Alphanumric"/></td>
</tr>
<tr>
<td><h3>Enter email:</h3></td><td><input type="text" name="email" placeholder="Email" required pattern="^[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" title="Enter Valid Email"/></td>
</tr>
<tr>
<td><h3>Enter Phone-no:</h3></td><td><input type="text" name="phone" placeholder="Phone Number" required pattern="^\d{10}$" title="Enter number"/></td>
</tr>
<tr>
<td><h3>Enter Password:</h3></td><td><input type="password" name="password" placeholder="Password" required pattern="^[a-zA-Z0-9'.-]+$" title="Enter Alphanumric"/></td>
</tr><br>
<tr>
<td colspan="5" align="center"><br><input type="submit" name="submit">
</td>
</tr>

</form>
</center>
</table>
<a href="login.php"><h2>signin</h2></a>
</body>
</html>




<?php 
$dbh=mysql_connect("localhost","root","") or die("Unable to connect");
$sdh=mysql_select_db("mess_development");

if(isset($_POST['submit']))
{
	$name=$_POST['name'] ;
	$rollno=$_POST['rollno'];
	$address=$_POST['address'];
	$email=$_POST['email'];
	$phone=$_POST['phone'];
	$password=$_POST['password'];
	
	$qry="insert into reg values('$name','$rollno','$address','$email','$phone','$password')";
	if(mysql_query($qry)>=0)
	{
		echo "<h1>You have registered succesfully!!</h1>";
	}
		
}
mysql_close($dbh);	
?>