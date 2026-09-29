<?php

echo "<table border='1' cellpadding='10'>";

for ($i = 1; $i <= 12; $i++) {

    echo "<tr>";

    for ($j = 1; $j <= 12; $j++) {

        echo "<td>";
        echo $i * $j;
        echo "</td>";
    }

    echo "</tr>";
}

echo "</table>";

?>