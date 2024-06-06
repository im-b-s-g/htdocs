<?php

//if(isset($_COOKIE["password"]) || isset($_COOKIE["username"]) )
//{ 
	//echo $_COOKIE["password"];
	//echo $_COOKIE["username"];
//}
//else
//{
	//echo "cookie not saved";
//}

if(!empty($_POST["remember"])) {
	setcookie ("username",$_POST["username"],time()+ 3600);
	setcookie ("password",$_POST["password"],time()+ 3600);
	echo "Cookies Set Successfuly";
} else {
	setcookie("username",$_POST["username"]);
	setcookie("password",$_POST["password"]);
	echo "Welcome ", $_POST["username"];
}



?>

<p><a href="myfile (copy).php"> Logout </a> </p>