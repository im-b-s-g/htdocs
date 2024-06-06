<?php
$_SESSION['username'] = "brahm";
$_SESSION['password'] = "gaur";
session_start();
include 'db.php';

if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}

$username = $_SESSION['username'];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $background_image = $_POST['background_image'];
    $font_color = $_POST['font_color'];
    $font = $_POST['font'];

    $stmt = $conn->prepare("UPDATE users SET background_image = ?, font_color = ?, font = ? WHERE username = ?");
    $stmt->bind_param("ssss", $background_image, $font_color, $font, $username);
    $stmt->execute();
    $stmt->close();
}

$stmt = $conn->prepare("SELECT background_image, font_color, font FROM users WHERE username = 'brahm'");
$stmt->bind_param("s", $username);
$stmt->execute();
$stmt->bind_result($background_image, $font_color, $font);
$stmt->fetch();
$stmt->close();

$background_image = $background_image ?: '';
$font_color = $font_color ?: '';
$font = $font ?: '';
?>

<!DOCTYPE html>
<html>
<head>
    <title>Welcome</title>
    <style>
        body {
            background-image: url('<?php echo $background_image; ?>');
            color: <?php echo $font_color; ?>;
            font-family: <?php echo $font; ?>;
        }
    </style>
</head>
<body>
    <h1>Welcome, <?php echo htmlspecialchars($username); ?></h1>
    <form method="POST" action="welcome.php">
        <label for="background_image">Background Image URL:</label>
        <input type="text" id="background_image" name="background_image" value="<?php echo htmlspecialchars($background_image); ?>"><br>
        <label for="font_color">Font Color:</label>
        <input type="text" id="font_color" name="font_color" value="<?php echo htmlspecialchars($font_color); ?>"><br>
        <label for="font">Font:</label>
        <input type="text" id="font" name="font" value="<?php echo htmlspecialchars($font); ?>"><br>
        <button type="submit">Save Preferences</button>
    </form>
    <a href="logout.php">Logout</a>
</body>
</html>
*