<?php


interface CalculateSquare
{
    public function calculateSquare(): float;
}


class Rectangle implements CalculateSquare
{
    private $x;
    private $y;

    public function __construct(float $x, float $y)
    {
        $this->x = $x;
        $this->y = $y;
    }

    public function calculateSquare(): float
    {
        return $this->x * $this->y;
    }
}


class Square implements CalculateSquare
{
    private $x;

    public function __construct(float $x)
    {
        $this->x = $x;
    }

    public function calculateSquare(): float
    {
        return $this->x ** 2;
    }
}


class Circle implements CalculateSquare
{
    const PI = 3.1416;

    private $r;

    public function __construct(float $r)
    {
        $this->r = $r;
    }

    public function calculateSquare(): float
    {
        return self::PI * ($this->r ** 2);
    }
}


class Triangle
{
    private $a;

    public function __construct(float $a)
    {
        $this->a = $a;
    }

    public function calculateSquare(): float
    {
        return $this->a;
    }
}


$objects = [
    new Square(5),
    new Rectangle(2, 4),
    new Circle(5),
    new Triangle(10),
];

foreach ($objects as $object) {
    $className = get_class($object);

    if ($object instanceof CalculateSquare) {
        echo "Объект класса {$className} реализует интерфейс CalculateSquare. Площадь: "
            . $object->calculateSquare() . "\n";
    } else {
        echo "Объект класса {$className} не реализует интерфейс CalculateSquare. \n";
    }
}



