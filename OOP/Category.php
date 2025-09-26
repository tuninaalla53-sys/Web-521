<?php
class Category {
    // Приватные свойства: название категории и список продуктов
    private $_name;
    private $_list_products = [];

    // Конструктор, принимающий имя категории и список продуктов
    public function __construct($name, $list_products = []) {
        $this->_name = $name;             // Инициализация названия категории
        $this->_list_products = $list_products;  // Инициализация списка продуктов
    }

    // Метод для получения имени категории
    public function getCategoryName() {
        return $this->_name;  // Возвращаем имя категории
    }

    // Метод для получения списка продуктов категории
    public function getCategoryProducts() {
        return $this->_list_products;  // Возвращаем массив продуктов категории
    }

    // Метод для добавления продукта в категорию
    public function addProduct($product) {
        $this->_list_products[] = $product;  // Добавляем продукт в массив
    }

    // Метод для поиска категории по имени
    public static function findCategoryByName($categories, $name) {
        // Перебираем все категории и ищем совпадение по имени
        foreach ($categories as $category) {
            if ($category->getCategoryName() === $name) {
                return $category;  // Возвращаем объект категории, если найдено совпадение
            }
        }
        return null;  // Если категория не найдена
    }
}
?>
