<?php
session_start();



?>

<!DOCTYPE html>
<html>

<head>
 <style>
        body {
            font-family: Arial, sans-serif;
            background-color: gray;
        }
    </style>
</head>
<body>

<center>
	
<form action="" method="POST"><br><br><br><br><br><br>
<h2><b><center>LOGIN FORM</center>
<table border="1" cellspacing="0"> 
				<tr>
					<td>USERNAME</td>
					<td><input type="text" name="username" required=""></td>
				</tr><br><br>
				<tr>
					<td>PASSWORD</td>
					<td><input type="text" name="password" required=""></td>
				</tr>
				<tr>
				
					<td><input type="submit" name="login" value="Login">

						<input type="reset" name="clear" value="Clear">
                       </td>
				</tr>
				
				
					
                       
				
			</table>
		</form><br>
		<h5>Do you want to register? Click here!</h5><a href="signup.php"><h3>Signup</h3></a>
    
		<?php
        $con=mysqli_connect("localhost","root","","db");
		if(isset($_POST['login']))
		{
			$username=$_POST['username'];
			$password=$_POST['password'];
			
			$query=mysqli_query($con,"select*from users where username='$username' and password='$password'");
			$check=mysqli_num_rows($query);
			if($check>0)
			{
				while($row=mysqli_fetch_array($query))
				{
					$_SESSION3['password']=$row['password'];
					header("location:index.php");
				}
			}
			else{  
				
				echo "<script> alert('Incorrect cridentials, Try Again!!!')</script>"; 
				
			}
		}
		?>
	</center>
	<div id="footer">
		
	</div>
</div>
</body>
</html>