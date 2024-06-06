<?php
if(isset($_COOKIE["password"]) || isset($_COOKIE["username"]) )
{
	echo "See You soon ", $_COOKIE["username"];
	setcookie ("username",$_POST["username"],time()- 3600);
	setcookie ("password",$_POST["password"],time()- 3600);
}
?>
<p><a href="myfile.php"> go to login </a> </p>