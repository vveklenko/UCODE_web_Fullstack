<?php
    namespace Space\Normal;
    use Datetime;

    function calculate_time() {
        $now = new DateTime('NOW');
        $past = new DateTime('1939-01-01');
        return $now->diff($past); 
    }

    $time= calculate_time(); 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Normal space</title>
</head>
<body>
    <p><?php echo"In real life you were absent for ". $time->format("%Y") . " years, ". $time->format("%m") . " months, ". $time->format("%d") . " days!";?></p></body>
</body>
</html>