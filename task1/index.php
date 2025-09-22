<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Задание 1</title>
</head>
<body>
    <h2>Задание 1: Генерация массива случайных чисел</h2>

    <?php
    function generateArray($count_elem, $min_val, $max_val) {
        if ($min_val > $max_val) {
            $temp = $min_val;
            $min_val = $max_val;
            $max_val = $temp;
        }
        $array = [];
        for ($i = 0; $i < $count_elem; $i++) {
            $array[] = rand($min_val, $max_val);
        }
        return $array;
    }

    $result = generateArray(10, 1, 20);
    ?>

    <pre><?php print_r($result); ?></pre>
    <a href="../index.php">Назад на главную</a>
</body>
</html>