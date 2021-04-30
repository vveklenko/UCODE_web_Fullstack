<?php
    class Router {
        public $params = Array();

        function __construct() {
            $this->params = $_GET;
            if (isset($this->params))
                print_r($this->params);
        }
    }
?>