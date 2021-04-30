<?php
    namespace Space\Quantum;
    use Datetime;
    
    function calculate_time() {
        $now = new DateTime('NOW');
        $past = new DateTime('1939-01-01');
        $needed = $now->diff($past); 

        $arr = array();

        $arr[0] = intdiv($needed->format("%Y"), 7);
        $arr[1] = $needed->format("%m") + ($needed->format("%Y") - $arr[0] * 7);
        $arr[2] = $needed->format("%d");
       
        return $arr;
    }


?>