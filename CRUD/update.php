<?php
$con=mysqli_connect("localhost","root","","db");


if(isset($_POST['edit']))
{//1st starts
$id = $_GET['id'];
$pname = $_POST['pname'];\
$price = $_POST['price'];
$detail = $_POST['detail'];

if(mysqli_query($con,"update products set pname = '$pname', price = '$price', detail = '$detail' where id='$id'")){
echo "<script>alert('data have updated!')</script>";
	
   }
    else
     {   
echo "<script>alert('data have not updated!')</script>";		
}
}// isset bracket ends here
?>    
             
<?php
$con=mysqli_connect("localhost","root","","db");
		$id=$_GET['id'];
		
		$query=mysqli_query($con,"select*from products where id='$id'");
		while($r=mysqli_fetch_array($query))
		{
		?>
  
<html>
<head>
<title> </title>
    
       
      <link rel="stylesheet" href="style.css">
    </head>
    <body>
<center>
        <a href="index.html"> Home</a>&nbsp;&nbsp;&nbsp;&nbsp;
        <a href="index.php"> Add product</a>&nbsp;&nbsp;&nbsp;&nbsp;
        <a href="product list.php"> List of products</a>&nbsp;&nbsp;&nbsp;&nbsp;
        <a href="logout.php"> Logout</a>
        &nbsp;&nbsp;&nbsp;&nbsp;
        <h1>Welcome to our store</h1></center>

<center>
<table border="1">
<form method="post">		 
    <tr><td>
 Product Name: <input type="text"name="pname" value="<?php echo $r['pname'];?>" required></td></tr><br>
             
           <br> 
           
           <tr><td>
Quantity:&nbsp;&nbsp;&nbsp;&nbsp;<input  type="number"name="price" value="<?php echo $r['price'];?>" required ></td></tr>
           
           
           <tr><td>
Detail:&nbsp;&nbsp;&nbsp;&nbsp;<input type="text"name="detail" value="<?php echo $r['detail'];?>" required></td></tr><br>
            <tr><td>
<button name="edit" type="submit">Update Data</button></td></tr>
            </form></table></center>
 <?php
			
        }
        ?> 
    </body></html>