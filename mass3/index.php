<?php
//3 задачка

 $arr = [1,2,3,4,5,6,7,8,9,10];
 $arr1 = [1,2,3,4,5,6,7,8,9,10];
 $sum = 0;
 $sum1 = 0;
 $prod = 1;

 echo "Стандартная функция <b>array_sum</b> ".array_sum($arr)."<br/>";
 echo "Стандартная функция <b>array_product</b> ".array_product($arr)."<br/>";
 echo "<br/>";
echo "Цикл <b>for</b> <br/>";
 for ($i=0; $i<count($arr1); $i++){
    $sum1 += $arr1[$i];
     echo $sum1," ";
    $prod =  $prod*$arr1[$i];

 }
 echo $prod;
 "<br/>"
 ?>