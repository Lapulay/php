<?php
if($_POST['str1'] && $_POST['str2']) {
    $first_str = $_POST['str1'];
    $second_str = $_POST['str2'];
    $test = true;
    foreach(str_split($second_str) as $char){
        if(substr_count($second_str, $char) > substr_count($first_str, $char)){
            $test = false;
        } 
    }
    if($test){
        print('да');
    }else{
        print('нет');
    }
}
//str_split Преобразует строку в массив
//substr_count Возвращает число вхождений подстроки

?>