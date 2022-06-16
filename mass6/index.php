<?php
// 6 задачка
//стандартная функция
$arr = array (0,10,5,15,7,2,35);
sort($arr);
print_r($arr);

//без стандартной функции
$arr = array (0,10,5,15,7,2,35);
for ($i = 0; $i < count($arr) - 1; $i++) {
    for ($j = $i + 1; $j < count($arr); $j++) {
        if ($arr[$i] > $arr[$j]) {
            $buf = $arr[$i];
            $arr[$i] = $arr[$j];
            $arr[$j] = $buf;
        }
    }
}

echo "Без стандартной функции: ";
print_r($arr);
?>