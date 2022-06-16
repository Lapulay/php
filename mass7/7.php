<!-- //sort — Сортирует массив по возрастанию -->
<!-- isset — Определяет, была ли установлена переменная значением, отличным от null -->
<!-- array_search — Осуществляет поиск данного значения в массиве и возвращает ключ первого найденного элемента в случае успешного выполнения -->
<!-- unset — Удаляет переменную -->
<?php
if (isset($_POST['str']) && isset($_POST['num'])) {
	$str = ( explode(' ', $_POST['str']));
	$numb = array_search($_POST['num'], $str);
    unset($str[$numb]);
    $old=$str;
	$old = array_values($old);
	print_r($old);
	sort($str);
	
    print_r($str);
	if ($old == $str) {
		echo 'Массив упорядочен';
		return;
	}
	echo 'Массив не упорядочен';
    return;
}
   

?>

