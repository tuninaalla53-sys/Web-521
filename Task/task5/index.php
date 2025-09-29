<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Задание 5</title>
</head>
<body>
    <h2>Задание 5: Калькулятор (со скобками и многозначными числами)</h2>

    <?php
    function calculateAdvanced($expression) {
        $expression = str_replace(' ', '', $expression);
        return eval("return $expression;");
    }

    $expression = "(12+8)*3-10/2";
    $result = calculateAdvanced($expression);
    ?>

    <p>Выражение: <strong><?php echo $expression; ?></strong></p>
    <p>Результат: <strong><?php echo $result; ?></strong></p>
    <a href="../index.php">Назад на главную</a>
</body>
</html>