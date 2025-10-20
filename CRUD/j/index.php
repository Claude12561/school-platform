<html>
    <head>
        <title> </title>
        <style>
            body{
          background-color:
            }
           
        th:hover
            {
                color: 
            }
            
         th{
            background-color:
            color:
           
        }
        
        h1{
            font-family: 
            border-left-style: 
            border-right-style: 
            border-bottom-style:
            border-top-style: 
        }
        
        .form-align{
            text-align: center;
        }
        .btn{
              font-family:  
            font-size: 20px;
            background-color: 
        }
        input{
            height: 30px;
           width: auto;
        }

        body{
            background-image: url('rwand.jpg');
        }   
        </style>
    </head>
    <body>
        <fieldset>
        <a href="index.html"> HOME</a>&nbsp;&nbsp;&nbsp;&nbsp;
        <a href="index.php"> SAVE DATA AND VIEW DATA SAVED</a>&nbsp;&nbsp;&nbsp;&nbsp;
        <a href="login.php"> LOGOUT</a>
        &nbsp;&nbsp;&nbsp;&nbsp;
        <center><h1>Welcome to Rwandan products</h1></center>
        </fieldset><center>
        <table border="1">
       <form method="post">		
           <h3><u>PRODUCTS</u></h3>
           <tr><td>
               Enter a product Name:&nbsp;&nbsp; <input type="text"name="pname" required></td></tr><br> 
           
           <tr><td>
Enter a product Price: &nbsp;&nbsp; <input type="number"name="price" required></td></tr><br>
            <tr><td>
Enter a product Detail:&nbsp; <input type="text"name="detail" required> </td></tr><br>
            <tr><td>
<input type="submit" name="submit" value="Save" size="70">
            </form></table></center>       
  

<?php

        // servername => localhost
        // username => root
        // password => empty
        // database name => staff
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
        $price = $_POST['price'];
        $detail = $_POST['detail'];

        // Performing insert query execution
        // here our table name is college
        $sql = "INSERT INTO products  VALUES ('','$pname','$price','$detail')";

        if(mysqli_query($conn, $sql))
{
echo "<script>alert('data have been saved successful!!!')</script>";
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

<fieldset><center>
    <h1><U>LIST OF PRODUCTS</U></h1>
<table border=1>
    
    <tr>
        <th>PRODUCT NAME</th>
        <th>PRODUCT PRICE</th>
        <th>PRODUCT DETAILS</th>
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
        <td>
        <button> <?php echo "<a href=update.php?id=$r[id]>UPDATE";?></button>
        <button> <a href="delete.php?id=<?php echo $r['id']; ?>">Delete</a></button>
            
    </td>
    </tr>
        <?php
        }
        ?></table>
        
        <?php
    
        ?>
    

    </center></fieldset></fieldset></body></html>
