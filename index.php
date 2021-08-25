<!DOCTYPE html>
<html>
<body>

<?php
echo "My first PHP script!<br>";
$txt = "PHP";
$color = "red";
echo "My car is " . $color . "<br>";
echo "My house is " . $COLOR . "<br>";
echo "My boat is " . $coLOR . "<br>";
echo "I love $txt!<br>";
ECHO "Hello World!<br>";
echo "Hello World!<br>";
EcHo "Hello World!<br>";
$x = 5;
$y = 10;

function myTest() {
  global $x, $y;
  $y = $x + $y;
} 

myTest();  // run function
echo $y; // output the new value for variable $y

?>

</body>
</html>  
