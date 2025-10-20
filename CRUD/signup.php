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
<?php
// Connect to database
$conn = mysqli_connect("localhost", "root", "", "db");

// Check connection
if(!$conn){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

// Handle form submission
if(isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];
    $pname = $_POST['pname'];

    // Check if passwords match
    if($password !== $confirm_password){
        echo "<script>alert('Passwords do not match!')</script>";
    } else {
        // Insert into users table
        $sql = "INSERT INTO users VALUES ('','$username','$password','$pname')";
        if(mysqli_query($conn, $sql)) {
            echo "<script>alert('Registration has been successful!!!')</script>";
            header("refresh:1;");
        } else {
            echo "<script>alert('Registration has not been successful!!!')</script>";
        }
    }
}

mysqli_close($conn);
?>

<?php
// Populate product dropdown
$con = mysqli_connect("localhost", "root", "", "db");
$s = mysqli_query($con, "SELECT pname FROM products ORDER BY pname DESC");
?>
        
<form action="" method="POST">
    <br><br><br><br><br><br>
    <h2><b><center>SIGNUP FORM</center></b></h2>
    <table border="1" cellspacing="0">
        <tr>
            <td>USERNAME</td>
            <td><input type="text" name="username" required=""></td>
        </tr>
        <tr>
            <td>PASSWORD</td>
            <td><input type="text" name="password" required=""></td>
        </tr>
        <tr>
            <td>CONFIRM PASSWORD</td>
            <td><input type="text" name="confirm_password" required=""></td>
        </tr>
        <tr>
            <td>Select product name:</td>
            <td>
                <select name="pname" required>
                    <option> No selected product name</option>
                    <?php
                    if(mysqli_num_rows($s) > 0) {
                        while($r = mysqli_fetch_assoc($s)) {
                            echo "<option>".$r['pname']."</option>";    
                        }
                    } else {  
                        echo "<option>No product name registered</option>";
                    }
                    ?>
                </select>
            </td>
        </tr>
        <tr>  
            <td colspan="2" align="center">
                <input type="submit" name="login" value="Signup">
            </td>
        </tr>
    </table>
</form><br><br><br><br><br>

<h3>Do you want to Login? Click here!</h3>
<a href="login.php"><h2>Login</h2></a>

</center>
</body>
</html>
