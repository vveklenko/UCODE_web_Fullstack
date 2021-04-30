<?php
    class Note {
        public $path;
        function __construct($filename) {
            if (!is_dir('tmp')) {
                mkdir('tmp');
            }
            $this->path = $filename;
        }

        function write($text) {
            $fp = fopen($this->path, 'a+');
            fwrite($fp, $text);
            fclose($fp);
        }

        function toList() {
            $fp = fopen($this->path, 'a+');
            $string = fread($fp, filesize($this->path));
            fclose($fp);
            return $string;
        }
    }


?>