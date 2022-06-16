
<?php
// header("Content-Type: text/html; charset=UTF-8");
//fgets — Читает строку из файла
//file — Читает содержимое файла и помещает его в массив
//feof — Проверяет, достигнут ли конец файла
//explode — Разбивает строку с помощью разделителя

// 1 функция
class Book
{
public $Title;
public $Author;
public $Publishing;
public $Condition;
}
$str = "test.txt";
$fd = fopen($str, 'r') or die("не удалось открыть файл");
while (!feof($fd)) {
$book = new Book();
$str = explode("|", fgets($fd));
if (count($str) == 4) {
$book->Author = $str[1];
$book->Title = $str[0];
$book->Publishing = $str[2];
$book->Condition = $str[3];
}
else {
echo "Данные в строке файла указаны не верно";
}
$list[] = $book;
echo '<br>';
var_dump($book);
}
fclose($fd);

?>  