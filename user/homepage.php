<?php
session_start();
if(!isset($_SESSION['user']))
{

header("Location: login.php");

}
?>

<html>
<head>
<style>
.vertical-menu {
    width: 200px;
}

.vertical-menu a {
    background-color: black;
    color: white;
    display: block;
    padding: 23.2px;
    text-decoration: none;
}

.vertical-menu a:hover {
    background-color: red;
}

</style>
</head>
<body>
<center><h1>* ANNAPURNA MESS *</h1></center><marquee><b>Daily Morning 9am To Night 9pm Service Available</b></marquee>
<img src="ptk.jpg" align="right" alt="Smiley face" height="85.5%" width="85.5%">
<div class="vertical-menu">
  <a href="new1.html"><center><h2>Breakfast</h2></center></a>
  <a href="new2.html"><center><h2>Lunch</h2></center></a>
  <a href="new3.html"><center><h2>Dinner</h2></center></a>
  <a href="new6.html"><center><h2>About Us</h2></center></a>
  <a href="logout.php"><center><h2>logout</h2></center></a>
</div>
</body>
</html>

