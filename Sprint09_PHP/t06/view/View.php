<?php
    class View {
        private $url;

        function __construct($url) {
            $this->url = $url;
        }

        function render() {
            ob_start();
            //echo file_get_contents($this->url);
            header("Location: $this->url");
            ob_clean();

        }
    }
?>