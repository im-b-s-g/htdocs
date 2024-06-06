<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['ID'];
    $name = $_POST['name'];
    $type = $_POST['type'];

    // For demonstration, let's just echo the values.
    // In a real application, you would process these values (e.g., save to a database).
    echo "<h1>Received Data</h1>";
    echo "<p>ID: $id</p>";
    echo "<p>Name: $name</p>";
    echo "<p>Type: $type</p>";

    // You can set the session variable here if needed
    session_start();
    $_SESSION['username'] = $name;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="sesston1.php">logout</a>
</body>
</html>
