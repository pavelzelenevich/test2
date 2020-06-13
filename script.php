<?php

$arr1 = [];
foreach ($argv as $item){
    if(preg_match('/^-?\d+$/', $item)){
        $arr1[] = $item;
    }
}
$arr1 = array_unique($arr1);
$size = sizeof($arr1)-1;

sort($arr1);

$str = implode(' ', $arr1);
echo 'Отсортированные числа: ' . $str;
