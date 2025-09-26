<?php
session_start(); // Инициализация сессии для сохранения данных между запросами

include_once('Category.php');  // Подключаем класс Category

// Инициализация массива категорий, если он еще не существует
if (!isset($_SESSION['categories'])) {
    $_SESSION['categories'] = [];
}

// Обработка формы для добавления категории
if (isset($_POST['addCategory'])) {
    $catName = $_POST['catName'];  // Получаем название категории
    $newCategory = new Category($catName);  // Создаем новый объект категории
    $_SESSION['categories'][] = $newCategory;  // Добавляем категорию в массив сессии
}

// Обработка формы для добавления продукта в категорию
if (isset($_POST['addProduct'])) {
    $productName = $_POST['productName'];  // Получаем название продукта
    $categoryIndex = $_POST['categoryIndex'];  // Получаем индекс категории

    // Проверка, существует ли категория с таким индексом
    if (isset($_SESSION['categories'][$categoryIndex])) {
        $_SESSION['categories'][$categoryIndex]->addProduct($productName);  // Добавляем продукт в категорию
    }
}

// Поиск категории по имени (если была отправлена форма поиска)
$foundCategory = null;
if (isset($_POST['findCategory'])) {
    $searchName = $_POST['searchName'];  // Получаем имя для поиска
    $foundCategory = Category::findCategoryByName($_SESSION['categories'], $searchName);  // Ищем категорию по имени
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Категории и Продукты</title>
</head>
<body>

    <h1>Управление категориями и продуктами</h1>

    <!-- Форма для добавления новой категории -->
    <form method="POST">
        <label for="catName">Название категории:</label>
        <input type="text" name="catName" id="catName" required>
        <button type="submit" name="addCategory">Добавить категорию</button>
    </form>

    <h2>Список категорий</h2>
    <ul>
        <?php foreach ($_SESSION['categories'] as $index => $category): ?>
            <li>
                <a href="?categoryIndex=<?php echo $index; ?>"><?php echo $category->getCategoryName(); ?></a>
            </li>
        <?php endforeach; ?>
    </ul>

    <!-- Форма для добавления продукта в категорию -->
    <form method="POST">
        <label for="categoryIndex">Выберите категорию:</label>
        <select name="categoryIndex" id="categoryIndex" required>
            <?php foreach ($_SESSION['categories'] as $index => $category): ?>
                <option value="<?php echo $index; ?>"><?php echo $category->getCategoryName(); ?></option>
            <?php endforeach; ?>
        </select>

        <label for="productName">Название продукта:</label>
        <input type="text" name="productName" id="productName" required>
        <button type="submit" name="addProduct">Добавить продукт</button>
    </form>

    <!-- Форма для поиска категории по имени -->
    <form method="POST">
        <label for="searchName">Поиск категории:</label>
        <input type="text" name="searchName" id="searchName">
        <button type="submit" name="findCategory">Найти категорию</button>
    </form>

    <!-- Вывод продуктов найденной категории -->
    <?php if ($foundCategory): ?>
        <h2>Продукты в категории "<?php echo $foundCategory->getCategoryName(); ?>"</h2>
        <ul>
            <?php foreach ($foundCategory->getCategoryProducts() as $product): ?>
                <li><?php echo $product; ?></li>
            <?php endforeach; ?>
        </ul>
    <?php endif; ?>

</body>
</html>
