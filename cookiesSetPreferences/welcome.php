<?php
    if(isset($_POST['username']) && isset($_POST['password'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];
        $bg_image = $_POST['bg_image'];
        $font_color = $_POST['font_color'];
        $font = $_POST['font'];

        // Set cookies
        setcookie('username', $username, time() + (86400 * 30), "/");
        setcookie('bg_image', $bg_image, time() + (86400 * 30), "/");
        setcookie('font_color', $font_color, time() + (86400 * 30), "/");
        setcookie('font', $font, time() + (86400 * 30), "/");

        echo "<h2>Welcome, $username!</h2>";
        echo "<div style='background-image: url($bg_image); height:50rem; color: $font_color; font-family: $font;'>Your preferences have been saved.</div>";
        echo "<br><a href='logout.php'>Logout</a>";
    } else {
        echo "Unauthorized access. Please login.";
    }
?>