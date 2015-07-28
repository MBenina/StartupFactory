<?php
class Animal {
    public $name;
    public $age;

    private static $number = 0;

    public static function printTotalAnimals(){
        echo "<p>Current number of animals in the zoo is:" . self::$number . "</p>";
    }

    public function __construct($name, $age){
        self::$number++;
        $this->name = $name;
        $this->age = $age;
    }

    public function talk(){
        echo "Silence.";
    }

    public function printAnimal(){
        echo "<p>Animal called {$this->name} is {$this->age} years old. </p> ";
    }

    public function SayHi($number){
        echo "<p> {$this->name} says HI $number times.</p>";
    }
}

class Cat extends Animal{
    public $breed;

    public function __construct($name, $age, $breed){
        parent::__construct($name, $age);
        $this->breed = $breed;
    }

    public function printAnimal(){
        parent::printAnimal();
        echo "<p> and breed is: {$this->breed} </p>";
    }

    public function talk(){
        echo "Meow.";
    }
}
$Kitty = new Cat('Kitty', 3, "Siamaska prevyzhodna");
$Kitty->printAnimal();
$Kitty->talk();

$Kitty::printTotalAnimals();

$Sharo = new Animal('Sharo', 7);
    $Sharo->printAnimal();

$Sharo::printTotalAnimals();

$Leonardo = new Animal('Leo', 4);
$Leonardo->printAnimal();
$Leonardo->SayHi(10);

//$Leonardo::printTotalAnimals();

Animal::printTotalAnimals();

