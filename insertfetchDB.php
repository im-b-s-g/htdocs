<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Registration Form</title>
</head>

<body>
    <h1>User Registration Form</h1>
    <form action="insertfetchDB.php" method="POST">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required><br><br>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required><br><br>
        <button type="submit" name="action" value="register">Register</button>
        <button type="submit" name="action" value="fetch">Fetch</button>
    </form>
</body>

</html>



<?php
if($_SERVER["REQUEST_METHOD"] == "POST")
{
    //get action 
    $action = $_POST['action'];
    //declare usernaame, root, password
    
    $username = "root";
    $servername = "localhost";
    $password = "";
    $database = "DATA";
    
    //setup connection string
    $conn = mysqli_connect("localhost", "root", "", "DATA");
    
    //check for connection
    if(!$conn)
    {
       die ("Error connecting to DB ");
    }

    //connect to database or create one if not exists
    $q = "CREATE DATABASE IF NOT EXISTS DATA";
    mysqli_query($conn, $q);
    
    //use database
    mysqli_select_db($conn, "DATA");

    //create table if not exists
    $q2 = "CREATE TABLE IF NOT EXISTS USER(id INT AUTO_INCREMENT PRIMARY KEY, username VARCHAR(255) NOT NULL, password VARCHAR(255) NOT NULL); ";
    mysqli_query($conn, $q2);

    // if action is to register store the data in DB
    if($action == 'register')
    {
        $usern = $_POST['username'];
        $pass = $_POST['password'];
        $q3 = "INSERT INTO USER(username, password) VALUES('$usern', '$pass');";
        
        if(mysqli_query($conn, $q3))
        {
            echo "Record inserted Successfully";
        }
        else
        {
            echo "Error inserting Record ". mysqli_error($conn);
        }
    }
    // if action == fetch retrieve the result set from the db and iterate over it to print the rows
    else if($action == 'fetch')
    {
        $q4 = "SELECT * FROM USER";
        $result = mysqli_query($conn, $q4);
        
        if(mysqli_num_rows($result) > 0)
        {
            echo "<table border='1'><tr><th>ID</th><th>Username</th><th>Password</th></tr>";
            while( $rows = mysqli_fetch_assoc($result))
            {
                echo "<tr><td>". $rows['id'] ."</td>". "<td>". $rows['username'] ."</td>". "<td>". $rows['password'] ."</td></tr>";
            }  
            echo "</table>";
        }
        else
        {
            echo "no records found";
        }
    }

    //close connection
    $conn->close();
}
?>




