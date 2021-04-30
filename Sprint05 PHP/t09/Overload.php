<?php
    class Overload {
        private $data = array();

        function __get ($name) {
            if (array_key_exists($name, $this->data)) 
                return $this->data[$name];
            else 
                return "NO DATA";
            
        }

        function __set ($name , $value) {
            $this->data[$name] = $value;
        }

        function __isset ($name) : bool {
            $this->data[$name] = "NO SET";
            return true;
        }

        function __unset($name) {
            $this->data[$name] = NULL;
        }
    }

    $overload= new Overload();
    $overload->mark_LXXXV= "INACTIVE";
    echo$overload->mark_LXXXV;
    echo"\n" . $overload->mark_LXXXVI;
    if (isset($overload->mark_LXXXVI))
        echo"\n" . $overload->mark_LXXXVI;
    unset($overload->mark_IV);if ($overload->mark_IV== NULL)echo"\nNULL\n";
?>