<?php
function coordinateQuartes($x, $y) {
    if ($x > 0 && $y > 0) {
        return 'Перша координатна чверть';
    }
    if ($x < 0 && $y > 0) {
        return 'Друга координатна чверть';
    }
    if ($x < 0 && $y < 0) {
        return 'Третя координатна чверть';
    }
    if ($x > 0 && $y < 0) {
        return 'Четверта координатна чверть';
    }
}