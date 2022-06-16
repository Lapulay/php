<?php
// 10 задачка

$arr1 = array(1,5,3);
$arr2 = array(2,4,6);
 
$res_arr = array_merge($arr1, $arr2);
asort($res_arr);
 
print_r($res_arr);
?>