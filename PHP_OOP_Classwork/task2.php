<?php

    class Animal {
        protected $name;
        public function __construct($name) {
            $this->name = $name;
        }
        public function speak() {
            echo " ". $this->name ." makes a sound.<br>"; 
        }
    }

    class Dog extends Animal {
        public function speak(){
            echo " ".$this->name . "says Woof!<br>";
        }
    }

    class Cat extends Animal {
        public function speak(){
            echo "".$this->name . "says Meow!<br>";
        }
    }

    $animal = new Animal("Tommy");
    $animal->speak();
    $dog= new Dog("Dog");
    $cat= new Cat("Cat");
    $dog->speak();
    $cat->speak();

?>