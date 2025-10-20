<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="style.css">
    <title>Register Products</title>
</head>
<body>

<?php
// Establish connection
$con = mysqli_connect("localhost", "root", "", "db");
// Query to fetch product names
$result = mysqli_query($con, "SELECT pname FROM products");
?>
<form method="post" action="product list.php">		
    <h3><u>REGISTER PRODUCTS HERE</u></h3>

    Username: <input type="text" name="username" required><br><br>
    Password: <input type="password" name="password" required><br><br>
 
    <p>
    <label for="pname">Select Product Name:</label>
    <select name="pname" required>
        <option value="">-- Select Product Name --</option>
        <?php
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                // Escape output to prevent XSS
                $productName = htmlspecialchars($row['pname']);
                echo "<option value=\"$productName\">$productName</option>";
            }
        } else {
            echo "<option value=\"\">No product name registered</option>";
        }
        ?>
    </select>
    </p>

    <input type="submit" name="submit" value="Save">
</form>

</body>
</html>
