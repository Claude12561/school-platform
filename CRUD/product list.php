

<html>
    <head>
    <link rel="stylesheet" href="style.css">
    <title> </title>
         <style>
        body {
            font-family: Arial, sans-serif;
            background-color: gray;
        
        }
    </style>
    </head>
    <body>
        <center>
       <a href="home.php">Home</a>&nbsp;&nbsp;&nbsp;&nbsp;
        <a href="index.php"> Add product</a>&nbsp;&nbsp;&nbsp;&nbsp;
        <a href="product list.php"> LIST OF IMPORT</a>&nbsp;&nbsp;&nbsp;&nbsp;
        <a href="logout.php"> Logout</a>
        &nbsp;&nbsp;&nbsp;&nbsp;
        <h1>Welcome to Rwandan products</h1></center>
       <center>
        </center></body></html>


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
        if(isset($_POST['submit']))
{

        $pname = $_POST['pname'];
        $quantity = $_POST['price'];
        $price = $_POST['detail'];
       
        // Performing insert query execution
        // here our table name is products
        $sql = "INSERT INTO products  VALUES ('','$pname','$quantity','$price')";

        if(mysqli_query($conn, $sql))
{
echo "<script>alert('data have been saved successful!!!')</script>";
 header("refresh:1;");
   }
    else
     {   
echo "<script>alert('data have not been saved successful!!!')</script>";
}
        }
    
        mysqli_close($conn);
?>
        
            <?php
$con=mysqli_connect("localhost","root","","db");
$s=mysqli_query($con,"SELECT * from  products");

?>

<center>
    <h1><U>LIST OF IMPORT</U></h1>
<table border=1>
    
    <tr>
        <th>PRODUCT NAME</th>
        <th>PRICE</th>
        <th>DETAIL</th>
        <th>ACTION</th>
</tr>
    <tr>
        <?php
        while($r=mysqli_fetch_array($s))
        {           
    ?>
            <td><?php echo $r['pname'];?></td>
            
            <td><?php echo $r['price'];?></td>
        <td><?php echo $r['detail'];?></td>
        
        <td><button> <?php echo "<a href=update.php?id=$r[id]>Update";?></button>
        <button> <a href="delete.php?id=<?php 
        echo $r['id']; ?>">Delete</a></button>
     
    </td>
    </tr>
        <?php
        }
        ?></table>
    <a href="report.php"><button>Print report</button></a> 