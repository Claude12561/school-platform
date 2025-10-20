<?php
session_start();
?>


<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    
    <center>
	<?php

        // servername => localhost
        // username => root
        // password => empty
        // database name => db
        $conn = mysqli_connect("localhost", "root", "", "db");

        // Check connection
        if(!$conn){
            die("ERROR: Could not connect. "
                . mysqli_connect_error());
        }
        
        // Taking all 2 values from the form data(input)
        if(isset($_POST['login']))
{

        $username = $_POST['username'];
        $password = $_POST['password'];
        

        // Performing insert query execution
        // here our table name is users
        $sql = "INSERT INTO users VALUES ('','$username','$password')";

        if(mysqli_query($conn, $sql))
{
echo "<script>alert('Pasword has been changed successful!!!')</script>";
header("refresh:1;");
   }
    else
     {   
echo "<script>alert('Pasword has not been changed successful!!!')</script>";
}
        }
    
        mysqli_close($conn);
?>
        
		<form action="" method="POST">
            <br><br><br><br><br><br>
			<h2><b><center>CHANGE PASSWORD</center></b></h2>
			<table border="1">
				<tr>
					<td>USERNAME</td>
					<td><input type="text" name="username" required=""></td>
				</tr><br><br>
				<tr>
					<td>PASSWORD</td>
					<td><input type="text" name="password" required=""></td>
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" name="login" value="Change password">
                        
                       </td>
				</tr>
			</table>
		</form><br><br><br><br><br>
	<h3>Do you want to Login?Click here!</h3><a href="login.php"> <h2>Login</h2></a>
	</center>
	<div id="footer">
		
	</div>
</div>
</body>
</html>