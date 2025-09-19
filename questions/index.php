<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

echo "<html><body>";

echo "<form>";

// Вопрос 1: Одиночный выбор
echo "<p>1. What is the capital of France?</p>";
echo "<input type='radio' name='question1' value='Paris'> Paris<br>";
echo "<input type='radio' name='question1' value='Berlin'> Berlin<br>";
echo "<input type='radio' name='question1' value='London'> London<br>";
echo "<input type='radio' name='question1' value='Madrid'> Madrid<br>";

// Вопрос 2: Множественный выбор
echo "<p>2. Which of the following are programming languages? (Select all that apply)</p>";
echo "<input type='checkbox' name='question2[]' value='PHP'> PHP<br>";
echo "<input type='checkbox' name='question2[]' value='HTML'> HTML<br>";
echo "<input type='checkbox' name='question2[]' value='CSS'> CSS<br>";
echo "<input type='checkbox' name='question2[]' value='Excel'> Excel<br>";

// Вопрос 3: Открытый вопрос
echo "<p>3. Explain what is PHP?</p>";
echo "<textarea name='question3'></textarea><br>";


echo "<input type='submit' value='Submit'>";
echo "</form>";

echo "</body></html>";
?>
</body>
</html>