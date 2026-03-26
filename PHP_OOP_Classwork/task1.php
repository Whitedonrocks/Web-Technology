<?php

    class Student {
        private $name;
        private $age;
        private $grade;
        public function __construct($name, $age, $grade) {
            $this->name = $name;
            $this->age = $age;
            $this->grade = $grade;
        }
        public function introduce() {
            return "HI, I am " . $this->name . ", I am " . $this->age . " years old and my grade is " . $this->grade . ".";
        }

    }
    $student1 = new Student("Prayag", 22, "A");
    echo $student1->introduce();
?>