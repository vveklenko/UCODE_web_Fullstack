<?php
    class StrFrequency {
        public $str;

        function __construct($str) {
            $this->str = $str;
        }

        function letterFrequencies() {
            $string = mb_strtoupper($this->str);      
            $arr = "ABCDEFGHIGKLMNOPQRSTUVWQYZ";
            $res = [];
            for ($i = 0; $i < strlen($arr); $i++){
                $counter = substr_count($string, $arr[$i]);
                if ($counter != 0) {
                    $res[$arr[$i]] = $counter;
                }
            }
            return $res;
        }

        function wordFrequencies() {
            $string = preg_replace('/[-,!]/', '', $this->str);
            $string = str_replace("'", "", $string);
            $string = mb_strtoupper($string);  
            $res = [];
            $arr = str_word_count($string, 1);
            for ($i = 0; $arr[$i]; $i++) {
                $counter = 0;
                for ($j = $i; $arr[$j]; $j++) {
                    if ($arr[$i] == $arr[$j]) {
                        $counter++;
                    }
                }
               
                $res[$arr[$i]] = $counter;
                
            }
            return $res;
        }

        function reverseString() {
            $res = preg_replace('/[-,!]/', ' ', $this->str);
            $res = str_replace("'", " ", $res);
            $res = preg_replace('/[0-9]/', ' ', $res);
            return strrev($res);
        }
    }


    function test($string) {
        $obj= new StrFrequency($string);
        $symbol= $obj->letterFrequencies();
        echo"Letters in ". $string. "\n";
        foreach($symbol as $k => $v) {
            echo"Letter ". $k . " is repeated ". $v . " times\n";
        }
        
        $symbol= $obj->wordFrequencies();
        echo"Words in ". $string. "\n";
        foreach($symbol as $k => $v) {
            echo"Word ". $k . " is repeated ". $v . " times\n";
         }
            echo"Reverse the string: ". $string. "\n";
            echo$obj->reverseString() . "\n";
            
    }
    test("Face it, Harley-- you and your Puddin' are kaput!");
    echo"*************\n";
    test("  Test test 123 45 !0 f   HeLlO wOrLd  ");
    echo"*************\n";
    test("");
?>