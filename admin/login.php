<html>
    <head><title>Admin page</title>
    </head>
    <body  background="cd.jpg">
	<center>
	<br>
	<br>
	<br>
	<br>
	<br>
	<h1>Admin login..!</h1>
        <form id="loginform" method="POST" action="login.php" >
            
            <h3> UserName: <input type="text" name="username" required pattern="^[a-zA-Z0-9'.-]+$" title="Enter Alphanumric"/></h3>
           <h3> Password: <input type="password" name="password" required pattern="^[a-zA-Z0-9'.-]+$" title="Enter Alphanumric"/></h3><br>
           <input type="submit" name="login" value="Login"/>
		   <input type="reset" name="Reset"/>
        </form>
		<a href="home.php"><h2>sign_up</h2></a>
		</center>
    </body>
</html>


<?php
        $dbh=mysql_connect("localhost","root","") or die("unable to connect");
        $sdh=mysql_select_db("mess_development");
		if(isset($_POST['login']))
		{
		$username=$_POST['username']; 
        $password=$_POST['password'];
        
        $qry="select * from login_admin where username='$username' and password='$password'";
        $result=mysql_query($qry);
        $n=mysql_num_rows($result);
        if($n!=0)  
    {  
    while($row=mysql_fetch_assoc($result))  
    {  
    $dbusername=$row['username'];  
    $dbpassword=$row['password'];  
    }  
  
    if($username == $dbusername && $password == $dbpassword)  
    {  
    session_start();  
    $_SESSION['sess_user']=$username;  
  
    /* Redirect browser */  
    header("Location: new.html");  
    }  
     else {  
    echo "Invalid username or password!";  
}
}
}  
?>