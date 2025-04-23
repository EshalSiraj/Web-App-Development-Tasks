<?PHP
//TASK 1
echo "<h4>Arithmetic Operations</h4>";
$num1 = 4;
$num2 = 8;

echo "First Number: $num1 <br>";
echo "Second Number: $num2 <br>";

echo "Addition: " . ($num1 + $num2) . "<br>";
echo "Subtraction: " . ($num1 - $num2) . "<br>";
echo "Multiplication: " . ($num1 * $num2) . "<br>";
echo "Division: " . ($num1 / $num2) . "<br>";

// Task 2
echo "<h4>Even or Odd</h4>";
$number = 5;
echo "Number: $number <br>";
if ($number % 2 == 0) {
    echo "It is Even.<br>";
} else {
    echo "It is Odd.<br>";
}

//TASK 3
// Task 3: Swap Two Variables
echo "<h4> Swapping Variables</h4>";
$a = 10;
$b = 20;

echo "Before Swapping: <br> A = $a <br> B = $b<br>";

$temp = $a;
$a = $b;
$b = $temp;

echo "After Swapping:<br> A = $a <br> B = $b<br>";

//TASK 4
echo "<h4>Greatest Number</h4>";
$x = 35;
$y = 14;
$z = 37;

echo "Numbers: <BR>  X = $x <BR> Y = $y <BR> Z = $z <br>";

if ($x >= $y && $x >= $z) {
    echo "Greatest is X: $x<br>";
} elseif ($y >= $x && $y >= $z) {
    echo "Greatest is Y: $y<br>";
} else {
    echo "Greatest is Z: $z<br>";
}

?>