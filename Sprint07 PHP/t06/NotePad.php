<?php
    class NotePad {
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
                    $string .= "<li> <a href='?file=$value' value='$value'> $value </a> 
                    <a href='?delete=$value' name='delete'> DELETE </a>
                    </li>";
            }

            return $string;
        }
    }


?>