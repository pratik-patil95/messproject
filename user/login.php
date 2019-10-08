
<html>
    <head>
        <title>login page</title>        
    </head>
    <body background="raner.jpg">
	<center>
	<br>
	<br>
	<br>
	<br>
	<br>
	<h1>User login..!</h1>
        <form id="loginform" method="POST" action="" >
            
            <h3> Rollno: <input type="text" name="rollno" required pattern="^[a-zA-Z0-9'.-]+$" title="Enter Alphanumric"/></h3>
           <h3> Password: <input type="password" name="password" required pattern="^[a-zA-Z0-9'.-]+$" title="Enter Alphanumric"/></h3>
           <input type="submit" name="login" value="Login"/>
		   <input type="reset" name="reset"/>
		   <h3>Don't have an account yet...? <a href="home.php">SignUp</h3></a>
        </form>
    </body>
</html>


<?php
session_start();

        $dbh=mysql_connect("localhost","root","") or die("unable to connect");
        $sdh=mysql_select_db("mess_development");
		if(isset($_POST['login']))
		{
		$username=$_POST['rollno']; 
        $password=$_POST['password'];
        $_SESSION['user']=$username;
        $qry="select * from reg where rollno='$username' and password='$password'";
        $result=mysql_query($qry);
        $n=mysql_num_rows($result);
        if($n!=0)  
    {  
    while($row=mysql_fetch_assoc($result))  
    {  
    $dbusername=$row['rollno'];  
    $dbpassword=$row['password'];  
    }  
  
    if($username == $dbusername && $password == $dbpassword)  
    {    
    $_SESSION['user']=$username;  
  
    header("Location: homepage.php");  
    }  
     else 
	 {  
    echo "Invalid Rollno or password!";  
}
}
}  
?>