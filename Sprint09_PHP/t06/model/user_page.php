<?php
    include("./signin.php");
    session_start();

    if(isset($_POST['signout'])) {
        session_destroy();
        $router = new View("./signin.php");
        $router->render();
        exit;
    }
?>


<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset='UTF-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Successful sign in</title>
    <link rel='stylesheet' href='../style.css'>
</head>
<body>
    <div>
        <h1>Successful sign in</h1>
        <form method='post'>
            <p>Hello <?php echo $_SESSION['name']; ?>!</p>
            <p>Status is: <?php echo $_SESSION['status']; ?></p>
            <p style="margin-top: 170px"><input name='signout' type='submit' id='signin' value='Sign out'></p>
        </form>
    </div>
</body>
</html>
