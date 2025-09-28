<?php
// Класс Product
class Product {
    public $name;
    public $price;
    public $description;
    public $brand;

    // Конструктор для инициализации полей
    public function __construct($name, $price, $description, $brand) {
        $this->name = $name;
        $this->price = $price;
        $this->description = $description;
        $this->brand = $brand;
    }

    // Метод getProduct() для вывода данных о продукте
    public function getProduct() {
        return "Name: $this->name, Price: $this->price, Description: $this->description, Brand: $this->brand";
    }
}

// Класс Phone (производный от Product)
class Phone extends Product {
    public $cpu;
    public $ram;
    public $countSim;
    public $hdd;
    public $os;

    // Конструктор для инициализации полей
    public function __construct($name, $price, $description, $brand, $cpu, $ram, $countSim, $hdd, $os) {
        parent::__construct($name, $price, $description, $brand);
        $this->cpu = $cpu;
        $this->ram = $ram;
        $this->countSim = $countSim;
        $this->hdd = $hdd;
        $this->os = $os;
    }

    // Переопределенный метод getProduct()
    public function getProduct() {
        return parent::getProduct() . ", CPU: $this->cpu, RAM: $this->ram, SIM: $this->countSim, HDD: $this->hdd, OS: $this->os";
    }
}

// Класс Monitor (производный от Product)
class Monitor extends Product {
    public $diagonal;
    public $frequency;
    public $ports;

    // Конструктор для инициализации полей
    public function __construct($name, $price, $description, $brand, $diagonal, $frequency, $ports) {
        parent::__construct($name, $price, $description, $brand);
        $this->diagonal = $diagonal;
        $this->frequency = $frequency;
        $this->ports = $ports;
    }

    // Переопределенный метод getProduct()
    public function getProduct() {
        return parent::getProduct() . ", Diagonal: $this->diagonal, Frequency: $this->frequency, Ports: $this->ports";
    }
}

// Массив продуктов
$products = [
    new Phone('iPhone 7', 1000, 'Phone', 'Apple', 'A9', '1GB', 1, '128GB', 'iOS'),
    new Phone('Galaxy S10', 1000, 'Phone', 'Samsung', 'Snapdragon 860', '3GB', 1, '128GB', 'Android'),
    new Monitor('Apple Cinema Display', 10000, 'Monitor', 'Apple', 24, '144Hz', 'HDMI, DisplayPort'),
    new Monitor('Samsung S24E650', 100, 'Monitor', 'Samsung', 21, '60Hz', 'VGA, HDMI, DisplayPort')
];
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Продукты</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
        }
        .product {
            margin-bottom: 20px;
        }
        .product h2 {
            font-size: 1.5em;
        }
        .product p {
            margin: 5px 0;
        }
    </style>
</head>
<body>
    <h1>Список продуктов</h1>
    <?php
    // Вывод продуктов на страницу
    foreach ($products as $product) {
        echo '<div class="product">';
        echo '<h2>' . $product->getProduct() . '</h2>';
        echo '</div>';
    }
    ?>
</body>
</html>
