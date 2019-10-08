<?php
session_start();
if(!isset($_SESSION['user']))
{

header("Location: login.php");

}
?>

<html>
</head><title>brkfast</title>
<body bgcolor="#ffffb3">
<form method="POST" action="cal1.php">
<center><table border="5" cellspacing="3" cellpadding="5">
<tr>
<td><b>MENU :-</b></td>
<td><b>Quantity</b></td>
</tr>
<tr>
<td><img src="1.jpg" alt="Smiley face" height="30%" width="30%"><h4>SHIRA & UPIT</h4><h4>Price = Rs.20/p</h4></td>
<td><input type="text" name="item_name" maxlength="3" size="3" pattern="^[0-9]+$" title="Enter number"/></td>
</tr>
<tr>
<td><img src="2.jpg" alt="Smiley face" height="36%" width="30%"><h4>OMLET</h4><h4>Price = Rs.15/p</h4></td>
<td><input type="text" name="quantity" maxlength="3" size="3" pattern="^[0-9]+$" title="Enter number"/></td>
</tr>
<tr>
<td><img src="4.jpg" alt="Smiley face" height="30%" width="30%"><h4>DOSA</h4><h4>Price = Rs.10/p</h4></td>
<td><input type="text" name="bill" maxlength="3" size="3" pattern="^[0-9]+$" title="Enter number"/></td>
</tr>
<tr>
</tr>
<tr>
<td><center><input type="submit" name="submit"/></center></td>
</tr>
</table>
</form>
</body>
</html>



