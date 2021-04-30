<?php
    class FilesList {
        public $dir;
        function __construct($dir) {
            if (!is_dir('tmp')) {
                mkdir('tmp');
            }
            $this->dir = "./$dir";
        }

        function toList() {
            $arr = scandir($this->dir);
            $string = "";
            foreach ($arr as $value) {
                if ($value != '.' && $value != '..') 
                    $string .= "<li> <a href='?file=$value' value='$value'> $value </a> </li>";
            }

            return $string;
        }
    }


?>