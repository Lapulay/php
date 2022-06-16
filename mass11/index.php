
<?php
// 11 задачка

$array = [5, -3, 8, 2, -5];
$array1 = [];
foreach ($array as $v) {
    $array1[] = $v;
    if ($v < 0) {
        $array1[] = 0;
    }
}
print_r($array1);
?>