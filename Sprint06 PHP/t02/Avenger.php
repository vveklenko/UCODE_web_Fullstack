<?php
    class Avenger {
        public $name, $alias, $gender, $age, $power = array(), $hp;

        function __construct($name, $alias, $gender, $age, $power, $hp) {
            $this->name = $name;
            $this->alias = $alias;
            $this->gender = $gender;
            $this->age = $age;
            $this->power = $power;
            $this->hp = $hp;
        }

        function __toString() {
            return "name: $this->name\ngender: $this->gender\nage: $this->age\n";
        }

        function __invoke() {
            $this->alias = strtoupper($this->alias);
            echo "$this->alias\n";
            foreach ($this->power as $i) {
                echo "$i \n";
            }
            echo "\n";
        }
    }

?>