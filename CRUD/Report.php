            <?php
$con=mysqli_connect("localhost","root","","db");
$s=mysqli_query($con,"SELECT * from  products");

?>

<center>
    <h1><U>LIST OF PRODUCTS</U></h1>
<table border=1>
    
    <tr>
        <th>PRODUCT NAME</th>
        <th>PRICE</th>
        <th>DETAIL</th>
       
</tr>
    <tr>
        <?php
        while($r=mysqli_fetch_array($s))
        {           
    ?>
            <td><?php echo $r['pname'];?></td>
            
            <td><?php echo $r['price'];?></td>
        <td><?php echo $r['detail'];?></td>
    </tr>
        <?php
        }
        ?></table>
	
    <button onclick="printreport()">Print report</button>
    <script type="text/javascript">
  function printreport()
        {
            window.print();
        }
        </script>
    <a href="product%20list.php"><button>Back</button></a>