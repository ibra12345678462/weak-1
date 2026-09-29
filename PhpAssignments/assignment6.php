<?php

$a = 8;
$b = 12;

$lcm = ($a > $b) ? $a : $b;

while (true) {

    if ($lcm % $a == 0 && $lcm % $b == 0) {
        break;
    }

    $lcm++;
}

echo "LCM = " . $lcm;

?>