<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php
$a = 5; 
$b = 10; 

// Поменять местами без использования третьей переменной
$a = $a + $b; 
$b = $a - $b; 
$a = $a - $b; 


echo "a = $a, b = $b"; 
?>
</body>
</html>