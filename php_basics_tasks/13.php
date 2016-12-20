<?php
$s = 190;
$t = 3;
$speed = $s/$t;
$speed2 =  ($s * 1000) / (($t * 60) * 60);
echo $speed . " km/h";
echo "<br>";
echo $speed2 . " m/s";