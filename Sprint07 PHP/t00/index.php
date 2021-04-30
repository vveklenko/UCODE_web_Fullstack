<?php
    if (!isset($_COOKIE['visits'])) 
        $_COOKIE['visits'] = 0;
    $visits = $_COOKIE['visits'] + 1;
    setcookie('visits', $visits, time() + 60);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cookie counter</title>
</head>
<body>
    <h1>Cookie counter</h1>
    <?php
        echo("This page was leaded $visits time(s) in last minute.");
    ?>
</body>
</html>

