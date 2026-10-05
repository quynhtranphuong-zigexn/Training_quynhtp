<?php
$a = 10;
$b = 2;
echo "a + b =" . ($a + $b) . "\n";
echo "a - b =" . ($a - $b) . "\n";
echo "a * b =" . ($a * $b) . "\n";
echo "a / b =" . ($a / $b) . "\n";
echo "a % b =" . ($a % $b) . "\n";
echo "a ** b =" . ($a ** $b) . "\n";

//Comparison
$x = 9;
$y = "9";
echo "x == y: " . ($x == $y ? "true" : "false") . "\n";
echo "x === y: " . ($x === $y ? "true" : "false") . "\n";
echo "x != y: " . ($x != $y ? "true" : "false") . "\n";
echo "x !== y: " . ($x !== $y ? "true" : "false") . "\n";
echo "x < y: " . ($x < $y ? "true" : "false") . "\n";
echo "x > y: " . ($x > $y ? "true" : "false") . "\n";
echo "x <= y: " . ($x <= $y ? "true" : "false") . "\n";
echo "x >= y: " . ($x >= $y ? "true" : "false") . "\n";

//Logical
$age = 20;
$has_license = true;
if ($age >= 18 && $has_license) {
    echo "You can drive.\n";}
if ($age >= 18 || $has_license) {
    echo "You can drive or have a license.\n";}
if (!$has_license) {
    echo "You cannot drive without a license.\n";}

//Conditional Assignment
$c = 0;
$d = 5;
$result = $c ?: $d;
echo "Result: " . $result . "\n";
$result2 = $c ?? $d;
echo "Result2: " . $result2 . "\n";



