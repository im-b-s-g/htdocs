<?php
// 1D Array
$fruits = array("Apple", "Banana", "Orange", "Mango", "Grapes");
echo "<h2>1D Array:</h2>";
echo "Fruits: ";
foreach ($fruits as $fruit) {
echo "$fruit, ";
}
// 2D Array
$students = array(
array("John", 25, "Male"),
array("Alice", 22, "Female"),
array("Bob", 24, "Male")
);

echo "<h2>2D Array:</h2>";

foreach ($students as $student) {
    foreach ($student as $value) 
        echo $value;
    echo "<br>";
    }

$str = "Hello, World!";
echo "<h4>String = $str</h4>";
echo "<h2>String Functions:</h2>";
echo "1. Length of '$str' is: " . strlen($str) . "<br>";
echo "2. Uppercase: " . strtoupper($str) . "<br>";
echo "3. Lowercase: " . strtolower($str) . "<br>";
echo "4. Substring: " . substr($str, 7, 5) . "<br>";
echo "5. Position of 'World' in '$str' is: " . strpos($str, "World") . "<br>";
?>