<?php
    class Ant {
        public $name, $role_in_army, $date_of_entry, $number_of_fights, $number_of_legs;

        function __construct($name, $role_in_army, $date_of_entry, $number_of_fights, $number_of_legs) {
            $this->name = $name;
            $this->role_in_army = $role_in_army;
            $this->date_of_entry = $date_of_entry;
            $this->number_of_fights = $number_of_fights;
            $this->number_of_legs = $number_of_legs;
        }

        function __serialize() {
            return [
                "name" =>  $this->name,
                "role_in_army" =>  $this->role_in_army,
                "date_of_entry" =>  $this->date_of_entry,
                "number_of_fights" =>  $this->number_of_fights,
                "number_of_legs" =>  $this->number_of_legs,
            ];
        }

        function __wakeup() {
            echo "name: ". $this->name. "\n";
            echo "role_in_army: ". $this->role_in_army. "\n";
            echo "date_of_entry: ". $this->date_of_entry. "\n";
            echo "number_of_fights: ". $this->number_of_fights. "\n";
            echo "number_of_legs: ". $this->number_of_legs. "\n";
            error_reporting(0);
        }
    }




?>