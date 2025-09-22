<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Задание 2</title>
</head>
<body>
    <h2>Задание 2: Возведение числа в степень</h2>

    <?php
    function power($number, $exponent) {
        return pow($number, $exponent);
    }

    $result = power(2, 5);
    ?>

    <p>2 в степени 5 = <strong><?php echo $result; ?></strong></p>
    <a href="../index.php">Назад на главную</a>
</body>
</html>