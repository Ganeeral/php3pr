<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <style>
         body {
            font-family: Arial, sans-serif;
            background-color: #f0f4f7;
            color: #333;
            margin: 0;
            padding: 20px;
        }

        h1 {
            text-align: center;
            color: #4CAF50;
        }

        .info {
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 20px;
            margin-bottom: 20px;
            transition: transform 0.3s;
        }


        .animal-title {
            font-size: 1.5em;
            color: #4CAF50;
            margin-bottom: 10px;
        }

        .animal-description {
            font-size: 1.2em;
            color: #555;
        }

        .special-action {
            font-style: italic;
            color: #888;
        }

        .container {
            max-width: 600px;
            margin: 0 auto;
        }
    </style>
    <?
    class Animal {
    protected $weight;
    protected $age;
    protected $color;

    public function __construct($weight, $age, $color) {
        $this->weight = $weight;
        $this->age = $age;
        $this->color = $color;
    }

    public function getInfo() {
        return "Вес: $this->weight кг, Возраст: $this->age лет, Окрас: $this->color";
    }
}

// Класс-наследник Lion
class Lion extends Animal {
    private $maneLength; // уникальное свойство

    public function __construct($weight, $age, $color, $maneLength) {
        parent::__construct($weight, $age, $color);
        $this->maneLength = $maneLength;
    }

    public function roar() { // уникальный метод
        return "Рык льва с длиной гривы $this->maneLength см!";
    }

    public function getLionInfo() {
        return $this->getInfo() . ", Длина гривы: $this->maneLength см";
    }
}

// Класс-наследник Rabbit
class Rabbit extends Animal {
    private $earLength; // уникальное свойство

    public function __construct($weight, $age, $color, $earLength) {
        parent::__construct($weight, $age, $color);
        $this->earLength = $earLength;
    }

    public function hop() { // уникальный метод
        return "Кролик прыгает с длиной ушей $this->earLength см!";
    }

    public function getRabbitInfo() {
        return $this->getInfo() . ", Длина ушей: $this->earLength см";
    }
}

// Класс-наследник Wolf
class Wolf extends Animal {
    private $packSize; // уникальное свойство

    public function __construct($weight, $age, $color, $packSize) {
        parent::__construct($weight, $age, $color);
        $this->packSize = $packSize;
    }

    public function howl() { // уникальный метод
        return "Волк воет в стае размером $this->packSize!";
    }

    public function getWolfInfo() {
        return $this->getInfo() . ", Размер стаи: $this->packSize";
    }
}

// Создаем объекты
$lion = new Lion(190, 5, 'золотистый', 30);
$rabbit = new Rabbit(2, 1, 'белый', 10);
$wolf = new Wolf(50, 3, 'серый', 7);

?>
  <h1>Информация о животных</h1>
    <div class="container">
        <div class="info">
            <div class="animal-title">Лев</div>
            <div class="animal-description"><?php echo $lion->getLionInfo(); ?></div>
            <div class="special-action"><?php echo $lion->roar(); ?></div>
        </div>

        <div class="info">
            <div class="animal-title">Кролик</div>
            <div class="animal-description"><?php echo $rabbit->getRabbitInfo(); ?></div>
            <div class="special-action"><?php echo $rabbit->hop(); ?></div>
        </div>

        <div class="info">
            <div class="animal-title">Волк</div>
            <div class="animal-description"><?php echo $wolf->getWolfInfo(); ?></div>
            <div class="special-action"><?php echo $wolf->howl(); ?></div>
        </div>
    </div>

</body>
</html>