<?php
echo "<h3>1. Greatest / Smallest</h3>";
$a = 25; $b = 10; $c = 40;
$greatest = $a; $smallest = $a;
if ($b > $greatest) { $greatest = $b; }
if ($c > $greatest) { $greatest = $c; }
if ($b < $smallest) { $smallest = $b; }
if ($c < $smallest) { $smallest = $c; }
echo "Greatest number: " . $greatest . "<br>";
echo "Smallest number: " . $smallest;

echo "<h3>2. Divisible by 3, 5, both, none</h3>";
$number = 15;
if ($number % 3 == 0 && $number % 5 == 0) {
    echo "$number is divisible by both 3 and 5";
} elseif ($number % 3 == 0) {
    echo "$number is divisible by 3";
} elseif ($number % 5 == 0) {
    echo "$number is divisible by 5";
} else {
    echo "$number is divisible by none of them";
}

echo "<h3>3. Odd / Even</h3>";
echo "<b>Odd numbers from 2 to 20:</b><br>";
for ($i = 2; $i <= 20; $i++) {
    if ($i % 2 != 0) { echo $i . " "; }
}
echo "<br><br><b>Even numbers from 35 to 7:</b><br>";
for ($i = 35; $i >= 7; $i--) {
    if ($i % 2 == 0) { echo $i . " "; }
}

echo "<h3>4. Divisible by 2 and 5 (50 to 2)</h3>";
for ($i = 50; $i >= 2; $i--) {
    if ($i % 2 == 0 && $i % 5 == 0) { echo $i . " "; }
}

echo "<h3>5. Reverse a number</h3>";
$number5 = 12345;
$original = $number5;
$reverse = 0;
while ($number5 > 0) {
    $digit = $number5 % 10;
    $reverse = $reverse * 10 + $digit;
    $number5 = ($number5 - $digit) / 10;
}
echo "Reverse of $original = $reverse";

echo "<h3>6. LCM</h3>";
$a6 = 8; $b6 = 12;
$lcm = ($a6 > $b6) ? $a6 : $b6;
while (true) {
    if ($lcm % $a6 == 0 && $lcm % $b6 == 0) { break; }
    $lcm++;
}
echo "LCM of $a6 and $b6 = $lcm";

echo "<h3>7. HCF</h3>";
$a7 = 18; $b7 = 24;
$x = $a7; $y = $b7;
while ($y != 0) {
    $temp = $y;
    $y = $x % $y;
    $x = $temp;
}
echo "HCF of $a7 and $b7 = $x";

echo "<h3>8. Multiplication Table</h3>";
echo "<table border='1' cellpadding='3' cellspacing='0'>";
for ($row = 1; $row <= 12; $row++) {
    echo "<tr>";
    for ($col = 1; $col <= 12; $col++) {
        echo "<td>" . ($row * $col) . "</td>";
    }
    echo "</tr>";
}
echo "</table>";

echo "<h3>9. Prime / Non-prime</h3>";
$number9 = 17;
$isPrime = true;
if ($number9 < 2) {
    $isPrime = false;
} else {
    for ($i = 2; $i * $i <= $number9; $i++) {
        if ($number9 % $i == 0) { $isPrime = false; break; }
    }
}
echo $isPrime ? "$number9 is a prime number" : "$number9 is a non-prime number";

echo "<h3>10. Primes from 10 to 50</h3>";
for ($n = 10; $n <= 50; $n++) {
    $isPrime = true;
    for ($i = 2; $i * $i <= $n; $i++) {
        if ($n % $i == 0) { $isPrime = false; break; }
    }
    if ($isPrime) { echo $n . " "; }
}
?>