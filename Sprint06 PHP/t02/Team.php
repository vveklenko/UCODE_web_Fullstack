<?php
    class Team {
        public $id, $avengers = array(), $origin;

        function __construct($id, $avengers) {
            $this->id = $id;
            $this->avengers = $avengers;
            $this->origin = $avengers;
        }

        function battle($damage) {
            foreach($this->avengers as $key) {
                $key->hp -= $damage;
                if ($key->hp <= 0) 
                    unset($this->avengers[array_search($key, $this->avengers)]);
            }
        }

        function calculate_losses($cloned_team) {
            if (count($this->avengers) == count($this->origin))
                echo "We haven't lost anyone in this battle!";
            else {
                $res = count($this->origin) - count($this->avengers);
                echo "In this battle we lost ". $res. " Avenger(s).". "\n";
            }
        }
    }
?>