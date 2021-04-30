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
    
    $time = calculate_time();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Quantum space</title>
</head>
<body>
    <p><?php echo"In quantum space you were absent for ". $time[0] . " years, ". $time[1] . " months, ". $time[2] . " days!";?></p></body>
</html>