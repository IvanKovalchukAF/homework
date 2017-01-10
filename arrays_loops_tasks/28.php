<?php
echo "<table border='1'>";
for($i = 1; $i < 10; $i++){
    echo "<tr>";
    for($a = 1; $a < 10; $a++){
        echo "<td>" .($a*$i). "</td>";
    }
    echo "</tr>";
}
echo "</table>";