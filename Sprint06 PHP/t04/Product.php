<?php
    class Product {
        private $name, $kcal_per_portion;

        function __construct($name, $kcal_per_portion) {
            $this->name = $name;
            $this->kcal_per_portion = $kcal_per_portion;
        }

        function getName() {
            return $this->name;
        }

        function getKcal() {
            return $this->kcal_per_portion;
        }
    }
?>