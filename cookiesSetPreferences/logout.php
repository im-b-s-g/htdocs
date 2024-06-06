
<?php
    setcookie('username', '', time() - 3600, "/");
    setcookie('bg_image', '', time() - 3600, "/");
    setcookie('font_color', '', time() - 3600, "/");
    setcookie('font', '', time() - 3600, "/");

    echo "You have been logged out.";
?>