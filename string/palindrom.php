<?php
// задачка 3
//echo strrev("perevertish");

//задачка 2

// function IsPalindromeStr ($string) {
//     if (strlen($string) <=1 ) {
//         return true;
//     } else {
//         if(substr($string, 0, 1)== substr($string,(strlen($string)-1),1)){
//             return IsPalindromeStr(substr($string, 1, strlen($string)-2));
//         } else{
//             return false;
//         }
//     }
// }

// $str = "malayalam";
// $is_palindrom = IsPalindromeStr($str);
// if($is_palindrom)
// echo "Palindrome";
// else 
// echo "not"


//strrev — Переворачивает строку задом наперёд
//strtolower — Преобразует строку в нижний регистр
//isset — Определяет, была ли установлена переменная значением, отличным от null
//str_replace — Заменяет все вхождения строки поиска на строку замены
//substr — Возвращает подстроку
//strlen — Возвращает длину строки


if (isset($_POST['str1'])) {

	$word = strtolower(str_replace(' ', '', $_POST['str1']));

	$res = longestP($word);
	echo "Длина: " . $res;
}

function isPalindrom($word)
{
	return $word == strrev($word);
}

function longestP($str)
{
	$n = strlen($str);
	$start = 0;
	$max = 1; //все подстроки длины 1 паллиндромы
	for ($i = 0; $i < $n; $i++) {
		for ($j = $i; $j < $n; $j++) {
			$flag = false;

			$flag = isPalindrom(substr($str, $i, $j - $i + 1));
			if ($flag && ($j - $i + 1) > $max) {
				$start = $i;
				$max = $j - $i + 1;
			}
		}
	}
	echo("Паллиндром максимальной длины: " . substr($str, $start, $max) . "<br>");
	return ($max);
}


?>
