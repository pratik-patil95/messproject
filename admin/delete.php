<?php
$id = $_GET['id'];
//Connect DB
//Create query based on the ID passed from you table
//query : delete where id = $id
// on success delete : redirect the page to original page using header() method
$a=mysql_connect("localhost","root","")or die("Unable to connect");
$b=mysql_select_db("mess_development");
// Check connection
// sql to delete a record
$sql = "delete from brkorders where id = $id"; 

if (mysql_query($b,$sql)) {
    header('Location: ordertable.php'); //If book.php is your main page where you list your all records
    exit;
} else {
    echo "Error deleting record";
}

?>