<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>

<?php
require_once 'contr.php'; // реализация пункта 1 тестового задания
echo '<br/>';
echo '<br/>';

$ar = ['red', 'blue', 'green', 'yellow', 'lime', 'magenta', 'black', 'gold', 'gray', 'tomato']; // реализация пункта 2 тестового задания (Тест Струпа)

for($a = 0; $a < 5; $a++){
    for($i = 0; $i < 5; $i++){
        $wordIndex = array_rand($ar);
        $ar2 = $ar;
        unset($ar2[$wordIndex]);
        $colorIndex = array_rand($ar2);
        echo "<span style='color: $ar2[$colorIndex]'>$ar[$wordIndex]</span> ";
    }
    echo "<br/>";
}

?>
<!--реализация пункта 3 тестового задания находится в файле script.php (его необходимо запустить через консоль передав аргументы в виде целых чисел)-->
<!--реализация пункта 4 тестового задания (парсинг сайта) логика хранится в файле pars.php-->
<form action="pars.php" method="post">
    <h3>ПАРСИНГ САЙТА</h3>
    <span>Введите в поле название команды</span>
    <input type="text" name="team">
    <button type="submit">submit</button>
</form>


</body>
</html>
