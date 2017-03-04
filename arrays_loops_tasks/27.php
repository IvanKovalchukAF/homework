<?php
$row = 20;
$cols = 20;
$colors = array('red','yellow','blue','gray','maroon','brown','green');
echo "<table border='1'>";
for($i = 1; $i <= $row; $i++) {
    echo "<tr>";
    for($a = 1; $a <= $cols; $a++) {
        $rand_color = array_rand($colors, 1);
        $num = rand(0, 10000);
        echo "<td style='background-color: $colors[$rand_color]'>" . $num . "</td>";
    }
    echo "</tr>";
}
echo "</table>";


