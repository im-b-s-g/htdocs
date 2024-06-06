<?php
// 1D Array
$fruits = array("Apple", "Banana", "Cherry", "Date", "Elderberry");
for ($i = 0; $i < count($fruits); $i++) {
 echo $fruits[$i] . "<br>";
}
// 2D Array
$cars = array (
 array("Volvo",22,18),
 array("BMW",15,13),
 array("Saab",5,2),
 array("Land Rover",17,15)
 );
 for ($row = 0; $row < 4; $row++) {
 echo "<p><b>Row number $row</b></p>";
 echo "<ul>";
 for ($col = 0; $col < 3; $col++) {
 echo "<li>".$cars[$row][$col]."</li>";
 }
 echo "</ul>";
 }
// String Functions
$str = 'Hello World!';
// 1. strlen()
echo "Length of string: ".strlen($str)."<br>";
// 2. strtolower()
echo "Lowercase string: ".strtolower($str)."<br>";
// 3. strtoupper()
echo "Uppercase string: ".strtoupper($str)."<br>";
// 4. ucfirst()
echo "Capitalized string: ".ucfirst($str)."<br>";
// 5. substr()
echo "Substring: ".substr($str, 3, 5)."<br>"
?>