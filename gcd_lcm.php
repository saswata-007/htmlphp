<?php
function calculateGCD($a, $b) {
    while ($b != 0) {
        $temp = $b;
        $b = $a % $b;
        $a = $temp;
    }
    return $a;
}

function calculateLCM($a, $b) {
    return ($a * $b) / calculateGCD($a, $b);
}

$number1 = 36;
$number2 = 48;

$gcd = calculateGCD($number1, $number2);
$lcm = calculateLCM($number1, $number2);

echo "GCD of $number1 and $number2 is: $gcd";
echo "<br>";
echo "LCM of $number1 and $number2 is: $lcm";
?>
