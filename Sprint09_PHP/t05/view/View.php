<?php
    class View {
        private $url;

        function __construct($url) {
            $this->url = $url;
        }

        function render() {
            ob_clean();
            echo file_get_contents($this->url);
        }
    }
?>