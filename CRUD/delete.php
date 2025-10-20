<html>
    <head>
        <title> </title>
        <link rel="stylesheet" href="style.css">
    </head>
<body>
<?php
$con=mysqli_connect("localhost","root","","db");
 if($_GET['id'])
 {
        $delete = $_GET['id'];
         $query = "delete from products where id='$delete'";
        $run = mysqli_query($con,$query);
        if($run)
        {
echo "
<script>
    alert('data deleted successful!!!');
window.location = ('product list.php');
</script>";     
        }
        else
        {
echo "<script>
    alert('data not deleted successful!!!');
</script>";     
        }
    }
?> 
    </body></html>