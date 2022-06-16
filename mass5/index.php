<?php
//5 задачка

$arr = [0, 10, 20, 30, 40];
$mini = array_search(min($arr), $arr);
$maxi = array_search(max($arr), $arr);
$max = max($arr);
$min = min($arr);
$arr[$mini] = $max;
$arr[$maxi] = $min;
echo "Max и Min поменяны местами: ". '<br>';
foreach ($arr as $key => $value) {
echo "$value".' ';
}
?>