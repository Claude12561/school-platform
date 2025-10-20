<?php
session_start();
?>


<!DOCTYPE html>
<html>
<link rel="stylesheet" type="text/css" href="style.css">
<head>
	<style>
body{
	background-image:url("rwanda.jpg");
}
</style>

	<title></title>
</head>
<body>
	
<form action="" method="POST"><br><br><br><br>
<h5>LOGIN FORM</h5>
<table border="0">
				<tr>
					<td>USERNAME</td>
					<td><input type="email" name="email"></td>
				</tr><br><br>
				<tr>
					<td>PASSWORD</td>
					<td><input type="password" name="passcode"></td>
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" name="signin" value="Signin">
                        
                        
                       </td>
				</tr>
			</table>
		</form>
		<h5>Do you want to register? Click here!</h5><a href="signup.php"><h5>Signup</h5></a>
		<?php
        $con=mysqli_connect("localhost","root","","db");
		if(isset($_POST['signin']))
		{
			$email=$_POST['email'];
			$passcode=$_POST['passcode'];
			
			$query=mysqli_query($con,"select*from user where email='$email' and passcode='$passcode'");
			$check=mysqli_num_rows($query);
			if($check>0)
			{
				while($row=mysqli_fetch_array($query))
				{
					$_SESSION['passcode']=$row['passcode'];
					header("location:index.html");
				}
			}
			else{
				echo "Username and Passwords are wrong, Try Again!!!"; 
				header("refresh:3;");
			}
		}
		?>
	</center>
	<div id="footer">
		
	</div>
</div>
</body>
</html>