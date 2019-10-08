<?php
session_start();
if(!isset($_SESSION['user']))
{

header("Location: login.php");

}

$dbh=mysql_connect("localhost","root","") or die("Unable to connect");
$sdh=mysql_select_db("mess_development");

if(isset($_POST['submit']))
{
	
	if($_POST['item_name']>0)
	{
	$shira=$_POST['item_name'];
	}
	else
	{
	$shira=0;
	}
	if($_POST['quantity']>0)
	{
	$omlet=$_POST['quantity'];
	}
	else{
	$omlet=0;
	}
	if($_POST['bill']>0)
	{
	$idli=$_POST['bill'];
	}
	else{
	$idli=0;
	}
	
	

define('shiraprice', 20);
define('omletprice', 15);
define('dosaprice', 10);
?>
<html>
</head>
<body bgcolor="#ffffb3">
<p>Click the button to print the current bill.</p>
<button onclick="myFunction()">Print this bill</button>
<script>
function myFunction() {
    window.print();
}
</script>
<center>

<?php
echo "<br><h1>ANNAPURNA MESS</h1><br/>";
echo "<br><h1>Order Processed at :-</h1><br/>";

$x=date("Y-m-d");
echo "Date :- ".$x."<br/>";
echo"<br/>";
echo "Shira : ".$shira."<br/>";
echo "Omlet : ".$omlet."<br/>";
echo "Dosa : ".$idli."<br/>";
$totalqty = 0;
$totalqty = $shira + $omlet + $idli;

echo "<br>Total quantity = ".$totalqty."<br/>";
echo "<br/>Price of Shira : Rs.".shiraprice."/p";
echo "<br/>Price of Omlet : Rs.".omletprice."/p";
echo "<br/>Price of Dosa : Rs.".dosaprice."/p";
$sprice=$shira * shiraprice;
$oprice=$omlet * omletprice;
$dprice=$idli * dosaprice;
$totalamount = 0.0;
$totalamount=$sprice + $oprice + $dprice;
echo "<br/>";
echo "<br>Sub total = ".$totalamount."<br/>";
}
$roll=$_SESSION['user'];
$x=date("Y-m-d");
$qry="insert into brkorders values('','$shira','$omlet','$idli','$totalqty','$x','$totalamount','$roll')";
$x = mysql_query($qry);

	if ($x > 0)
	{
		echo "<h1>You have Ordered succesfully!!</h1>";
	}	
mysql_close($dbh);	
?>

</center>
</body>
</html>