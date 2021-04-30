<?php
    class LList implements IteratorAggregate {
        private $head;
        private $count;

        function __construct() {
            $head = null;
            $count = 0;           
        }

        function getFirst() {
            return $this->head->data;
        }

        function getLast() {
            while ($current->next != null) {
                $current = $current->next;
            }
            return $current->data;
        }

        function add($element) {
            $node = new LLitem($element);
            if ($this->size == 0) {
                $this->head = $node;
            }
            else {
                $current = $this->head;
                while ($current->next != null) {
                    $current = $current->next;
                }
                $current->next = $node;
            }
            $this->size++;
        }

        function addArr($array) {
            foreach ($array as $element) {
                $this->add($element);
            }
        }

        function remove($element) {
            $current = $this->head;
            $previous = $current;
            while ($current->next != null) {
                if ($current->data == $element) {
                    if ($current == $this->head) {
                        $this->head = $this->head->next;
                    }
                    $previous->next = $current->next;
                    break;
                }          
                $previous = $current;
                $current = $current->next;
            }
            if ($current->data == $element) {
                if ($current == $this->head) {
                    $this->head = $this->head->next;
                }
                $previous->next = $current->next;
            }
        }

        function removeAll($element) {
            $current = $this->head;
            while ($current != NULL) {
                if ($current->data == $element) 
                    $this->remove($element);   
                $current = $current->next;  
            }  
        }

        function contains($element) {
            $current = $this->head;
            while ($current->next != null) {
                if ($current->data == $element)
                    return true;
                $current = $current->next;
            }
            return false;
        }

        function clear() {
            $this->count = 0;
            $this->head->next = null;   
            $this->head = null;     
        }

        function count() {
            return $this->count;
        }

        function toString() {
            $current = $this->head;
            $string = '';
            while ($current->next != null) {
                $string .= "$current->data, ";
                $current = $current->next;
            }
            $string .= $current->data;
            return $string;
        }

        function getIterator() {
            return (function () {
                $array = [];
                $current = $this->head;
                while ($current->next != null) {
                    $array[$i] = $current->data;
                    $current = $current->next;
                    $i++;
                }
                $array[$i] = $current->data;
                return $array;
            })();
        }
    }
?>
