<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Задание 3</title>
</head>
<body>
    <h2>Задание 3: Обмен значениями переменных</h2>

    <?php
    function swapValues(&$a, &$b) {
        $temp = $a;
        $a = $b;
        $b = $temp;
    }

    $x = 10;
    $y = 20;

    swapValues($x, $y);
    ?>

    <p>После обмена: x = <strong><?php echo $x; ?></strong>, y = <strong><?php echo $y; ?></strong></p>
    <a href="../index.php">Назад на главную</a>
</body>
</html>