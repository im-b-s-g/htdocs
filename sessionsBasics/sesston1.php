<?php
session_start();
$flag = false;
echo "<br><h1>Here in session</h1><br>";

if (isset($_SESSION['username'])) {
    session_destroy();
    $flag = true;
}

if ($flag) {
    echo "<h1>Session destroyed successfully</h1>";
} else {
    echo "Flag is false";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Submission</title>
</head>
<body>
    <form action="test.php" method="post">
        <h3>User's ID: <input type="text" name="ID" required /></h3>
        <h3>User's Name: <input type="text" name="name" required /></h3>
        <h3>User Type: <input type="text" name="type" required /></h3>
        <input type="submit" value="Submit" />
    </form>
</body>
</html>
