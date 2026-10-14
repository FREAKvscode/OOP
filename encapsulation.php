<?php

class Cat
{
    private $name;
    private $color;

    public function __construct(string $name, string $color)
    {
        $this->name  = $name;
        $this->color = $color;
    }

    public function sayHello()
    {
        echo 'Привет! Меня зовут ' . $this->name . '. Мой цвет: ' . $this->color . '.';
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name)
    {
        $this->name = $name;
    }

    public function getColor(): string
    {
        return $this->color;
    }

    public function setColor(string $color)
    {
        $this->color = $color;
    }
}

$cat1 = new Cat('Снежок', 'white');
$cat2 = new Cat('Барсик', 'orange');

$cat1->sayHello();
echo "\n";
$cat2->sayHello();




