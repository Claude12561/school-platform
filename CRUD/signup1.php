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
        if(isset($_POST['login']))
{

        $username = $_POST['username'];
        $password = $_POST['password'];
        

        // Performing insert query execution
        // here our table name is users
        $sql = "INSERT INTO users VALUES ('','$username','$password')";

        if(mysqli_query($conn, $sql))
{
echo "<script>alert('Resgistration has been successful!!!')</script>";
header("refresh:1;");
   }
    else
     {   
echo "<script>alert('Resgistration has not been successful!!!')</script>";
}
        }
    
        mysqli_close($conn);
?>