<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Задание 4</title>
</head>
<body>
    <h2>Задание 4: Калькулятор (однозначные числа)</h2>

    <?php
    function calculateSimple($expression) {
        $expression = str_replace(' ', '', $expression);
        return eval("return $expression;");
    }

    $expression = "2+3*4-6/2";
    $result = calculateSimple($expression);
    ?>

    <p>Выражение: <strong><?php echo $expression; ?></strong></p>
    <p>Результат: <strong><?php echo $result; ?></strong></p>
    <a href="../index.php">Назад на главную</a>
</body>
</html>