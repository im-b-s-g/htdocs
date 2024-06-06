<?php
$insert = false;
if(isset($_POST['name'])){
$server = "localhost";
$username = "root";
$password = "";

$conn = mysqli_connect($server, $username, $password);

if(!$conn)
{
    die("connection to this database failed due to ".mysqli_connect_error());
}

$name = $_POST['name'];
$age = $_POST['age'];
$gender = $_POST['gender'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$other = $_POST['other'];
$sql = "INSERT INTO `trip`.`trip` ( `name`, `age`, `gender`, `email`, `phone`, `other`, `dt`) VALUES ('$name', '$age', '$gender', '$email', '$phone', '$other', current_timestamp());";
// echo "$sql";

if($conn->query($sql) == true)
{
    // echo "successfully inserted";
    $insert=true;
}
else
{
    echo "ERROR: $sql <br> $conn->error";
}
$conn->close();}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style.css" />
    <title>Welcome to Travel Form</title>
  </head>
  <body>
    <div class="container">
      <h3>Welcome to GEHU US Travel Form</h3>
      <p>Enter your travel details.</p>
      <?php 
      if($insert == true){
      echo "<p class='submitmsg'>Your form has been submitted successfully.</p>";}
      ?>
      

      <form action="index.php" method="post">
        <input
          type="text"
          name="name"
          id="name"
          placeholder="Enter your name"
        />
        <input type="text" name="age" id="age" placeholder="Enter your Age" />
        <input
          type="text"
          name="gender"
          id="gender"
          placeholder="Enter your gender"
        />
        <input
          type="email"
          name="email"
          id="email"
          placeholder="Enter your email"
        />
        <input
          type="phone"
          name="phone"
          id="phone"
          placeholder="Enter your phone"
        />
        <textarea
          name="other"
          id="other"
          cols="30"
          rows="10"
          placeholder="Enter any other information here"
        ></textarea>

        <button type="submit" class="btn">SUBMIT</button>
      </form>
    </div>
    <script src="index.js"></script>
  </body>
</html>
