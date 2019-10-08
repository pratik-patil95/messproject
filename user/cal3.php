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
	$chicken=$_POST['item_name'];
	}
	else
	{
	$chicken=0;
	}
	if($_POST['quantity']>0)
	{
	$goan=$_POST['quantity'];
	}
	else{
	$goan=0;
	}
	if($_POST['bill']>0)
	{
	$leaf=$_POST['bill'];
	}
	else{
	$leaf=0;
	}
	//$total=$shira+$omlet+$idli;
	/*$qry="insert into orders(item_name,quantity,bill) values('$shira','$omlet','$idli')"; */
	

define('chickenprice', 110);
define('goanprice', 70);
define('leafprice', 50);
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
echo $chicken."= Chicken Biryani<br/>";
echo $goan."= Goan thali<br/>";
echo $leaf."= Leaf thali<br/>";
$totalqty = 0;
$totalqty = $chicken + $goan + $leaf;

echo "<br>Total quantity = ".$totalqty."<br/>";
echo "<br/>Price of Chicken Biryani :".chickenprice;
echo "<br/>Price of Goan thali :".goanprice;
echo "<br/> Price of Leaf thali :".leafprice;
$cprice=$chicken * chickenprice;
$gprice=$goan * goanprice;
$lprice=$leaf * leafprice;
$totalamount = 0.0;
$totalamount=$cprice + $gprice + $lprice;
echo"<br/>";
echo "<br/>Sub total = ".$totalamount."<br/>";
}
$roll=$_SESSION['user'];
$x=date("Y-m-d");
$qry="insert into dinnerorders values('','$chicken','$goan','$leaf','$totalqty','$x','$totalamount','$roll')";
$x = mysql_query($qry);

	if ($x > 0)
	{
		echo "<h1>You have Ordered succesfully!!</h1>";
	}
	else
	{
	echo "f";
	}
	
mysql_close($dbh);	
?>
</center>
</body>
</html>