<!DOCTYPE html>
<html>
<head>
<title>Строки</title>
<meta charset="utf-8" />
</head>
<body>
<h1>Строки</h1>
<h2>1 задание</h2>

<br>
<form action="string.php" method="post">
    Первое слово <input type="text" name="str1" value="hello">
		Второе слово <input type="text" name="str2" value="hello">
    <input type="submit" name="submit" value="Проверить">
</form>
<br>
<h1>2 задание</h1>
    <form action="palindrom.php" method="post">
        <input type="text" name="str1" value="палиндром">
        <input type="submit" name="submit" value="Проверить">
    </form>
</body>
</html>

<h1>4 задание</h1>
    <form action="regular.php" method="post">
        <input type="text" name="text" value="палиндром">
        <input type="text" name="slovo" value="палиндром">
        <input type="submit" name="submit" value="Проверить">
    </form>

    <h2>5 задание</h2>
<br>
<form action="shifr.php" method="post">
    Ключ<input type="text" name="key" value="abcde">
		Текст<input type="text" name="text" value="hello">
    <input type="radio" name="todo" value="encrypt" /> Зашифровать <br>
    <input type="radio" name="todo" value="decrypt" /> Расшифровать <br>
    <input type="submit" name="submit" value="Погнали">
</form>
</body>
</html>