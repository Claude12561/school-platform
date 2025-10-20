<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Rwandan Products</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: gray;
        }

        .save-button {
            background-color: seagreen;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 10px;
            font-size: 16px;
            cursor: pointer;
        }

        .save-button:hover {
            background-color: darkgreen;
        }
    </style>
</head>
<body> 
    <center>
        <?php if (isset($_SESSION['username'])): ?>
            <h3>Welcome, <b><?php echo htmlspecialchars($_SESSION['username']); ?></b></h3>
        <?php endif; ?>

        <nav>
            <a href="home.php">Home</a>&nbsp;&nbsp;&nbsp;&nbsp;
            <a href="index.php">Add Product</a>&nbsp;&nbsp;&nbsp;&nbsp;
            <a href="product list.php">List of Import</a>&nbsp;&nbsp;&nbsp;&nbsp;
            <a href="#">Add User</a>&nbsp;&nbsp;&nbsp;&nbsp;
            <a href="logout.php">Logout</a>
        </nav>

        <h1>Welcome to Rwandan Products</h1>
        <h3><u>Register Products Here</u></h3>

        <form method="post" action="product list.php">
            <table border="1" cellpadding="10">
                <tr>
                    <td>Product Name:</td>
                    <td><input type="text" name="pname" required></td>
                </tr>
                <tr>
                    <td>Quantity:</td>
                    <td><input type="number" name="price" required></td>
                </tr>
                <tr>
                    <td>Detail:</td>
                    <td><input type="text" name="detail" required></td>
                </tr>
                <tr>
                    <td colspan="2" align="center">
                        <input type="submit" name="submit" value="Save" class="save-button">
                    </td>
                </tr>
            </table>
        </form>
    </center>
</body>
</html>
