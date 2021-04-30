<?php
    class Tower extends Building {
        private $elevator, $arc_capacity, $height;

        function getElevator() : bool {
            return $this->elevator;
        }

        function setElevator($elevator) {
            $this->elevator = $elevator;
        }

        function getArcCapacity() : int {
            return $this->arc_capacity;
        }

        function setArcCapacity($arc_capacity) {
            $this->arc_capacity = $arc_capacity;
        }

        function getHeight() : float {
            return $this->height;
        }

        function setHeight($height) {
            $this->height = $height;
        }

        function getFloorHeight() : float {
            return $this->height / $this->getFloors();
        }

        public function toString() : string {
            $props = ["Floors : " . $this->floors,
                "Material : " . $this->material,
                "Address : " . $this->address,
                "Elevator : ". $this->elevator,
                "Arc reactor capacity : ". $this->arc_capacity,
                "Height : ". $this->height,
                "Floor height : ". $this->getFloorHeight(),
            ];

            $str = "";

            foreach ($props as $p)
                $str = $str . $p . "\n";
            return $str;
        }
    }
?>