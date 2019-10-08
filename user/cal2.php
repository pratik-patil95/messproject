<?php
session_start();
if(!isset($_SESSION['user']))
{

header("Location: login.php");

}
?>

<?php
$dbh=mysql_connect("localhost","root","") or die("Unable to connect");
$sdh=mysql_select_db("mess_development");

if(isset($_POST['submit']))
{
	
	if($_POST['item_name']>0)
	{
	$indian_thali=$_POST['item_name'];
	}
	else
	{
	$indian_thali=0;
	}
	if($_POST['quantity']>0)
	{
	$chapati_thali=$_POST['quantity'];
	}
	else
	{
	$chapati_thali=0;
	}
	if($_POST['bill']>0)
	{
	$pulav=$_POST['bill'];
	}
	else{
	$pulav=0;
	}
	//$total=$shira+$omlet+$idli;
	/*$qry="insert into orders(item_name,quantity,bill) values('$shira','$omlet','$idli')"; */
	

define('indianprice', 70);
define('chapatiprice', 50);
define('pulavprice', 30);
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
//echo date('jS F Y');
$x=date("Y-m-d");
echo "Date :-<br/>".$x."<br/>";
echo "<br/>";
echo $indian_thali."= indian thali<br/>";
echo $chapati_thali."= chapati thali<br/>";
echo $pulav."= pulav<br/>";
$totalqty = 0;
$totalqty = $indian_thali + $chapati_thali + $pulav;

echo "<br>Total quantity = ".$totalqty."<br/>";
echo "<br/>Price of Indian Thali :".indianprice;
echo "<br/>Price of Chapati Thali :".chapatiprice;
echo "<br/>Price of Pulav :".pulavprice;
$iprice=$indian_thali * indianprice;
$cprice=$chapati_thali * chapatiprice;
$pprice=$pulav * pulavprice;
$totalamount = 0.0;
$totalamount=$iprice + $cprice + $pprice;
echo "<br/>";
echo "<br/>Sub total = ".$totalamount."<br/>";
}
$roll=$_SESSION['user'];
$x=date("Y-m-d");
$qry="insert into lunchorders values('','$indian_thali','$chapati_thali','$pulav','$totalqty','$x','$totalamount','$roll')";
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