<?php

$dbh=mysql_connect("localhost","root","") or die("Unable to connect");
$sdh=mysql_select_db("mess_development");


$id=$_POST['id'];
$qry1="delete from brkorders where id='$id'";
$result1=mysql_query($qry1);
$q1="select * from brkorders";
$result=mysql_query($q1);
$n1=mysql_num_rows($result);
if($n1 > 0)
{
print "<table border='border'>";
print "<tr><th>Order Id</th><th>Shira Quantity</th><th>Omlet Quantity</th><th>Dosa Quantity</th><th>Total Quantity</th>
<th>Date</th><th>Bill</th><th>Roll No.</th></tr>";
while($array=mysql_fetch_row($result))
        {

                print "<tr>";
                foreach($array as $i)

				{
                        print "<td>$i</td>";
                }
                print "</tr>";
        }
}

else 
{
    echo "\n Enter the id";
}

?>
