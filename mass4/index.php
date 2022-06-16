<?php

//  $array = array('1', '1', '2', '3', '4','5', '6', '7', '5'); 
 $array = array('1', '1', '2', '3', '4','5', '6', '7', '5','7');
  for($i=0; $i<count($array); $i++)
 {
     for($j=$i+1; $j<count($array); $j++)
     {
        if($array[$i] == $array[$j]){
             echo "if";
         } 
     }
  }
//  print_r(array_count_values($array));


  
?>