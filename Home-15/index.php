<?php
$arr = [20, 7, -1, 5, 4, 11, 0];
$count = count($arr);

for ($i = 1; $i < $count; $i++) {
    $value = $i;
    $temp = $arr[$i];

    while ($value > 0 && $temp < $arr[$value - 1]) {
        $arr[$value] = $arr[$value - 1];
        $value--;
    }
    $arr[$value] = $temp;
}

var_dump($arr);