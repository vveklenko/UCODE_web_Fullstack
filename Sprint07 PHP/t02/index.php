<?php
    session_start();
    
    function start() {
        echo "<!DOCTYPE html>
            <html lang='en'>
            <head>
                <meta charset='UTF-8'>
                <meta http-equiv='X-UA-Compatible' content='IE=edge'>
                <meta name='viewport' content='width=device-width, initial-scale=1.0'>
                <title>Document</title>
            </head>
            <body>
                <form action='index.php' method='post'>
                    <p>Password not saved at session.</p>
                    <p>Password for saving to session: 
                    <input type='text' placeholder='Password to session' name='password'>
                    </p>
                    <p>Salt for saving to session: 
                    <input type='text' placeholder='Salt to session' name='salt'>
                    </p>
                    <input type='submit' value='SAVE' name='save'>
                </form>
            </body>
            </html>";
    }

    function checked($hash) {
        echo("<!DOCTYPE html>
            <html lang='en'>
            <head>
                <meta charset='UTF-8'>
                <meta http-equiv='X-UA-Compatible' content='IE=edge'>
                <meta name='viewport' content='width=device-width, initial-scale=1.0'>
                <title>Document</title>
            </head>
            <body>
                <form action='index.php' method='post'>
                    <p>Password saved at session.</p>
                    <p>Hash is: $hash
                    </p>
                    <p>Try to guess: 
                    <input type='text' placeholder='Password to session' name='guess'>
                    <input type='submit' value='Check password' name='check'>
                    </p>
                    <input type='submit' value='CLEAR' name='clear'>
                </form>
            </body>
            </html>");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password</title>
</head>
<body>
    <h1>Password</h1>
    <?php 
        if($_POST) {
            if($_POST['guess']) {
                if(isset($_POST['clear'])) {
                    session_destroy();
                    echo("<p style=\"color: blue;\">Session cleared!</p>");
                    start();
                }

                else if($_SESSION['hash'] == crypt($_POST['guess'], $_SESSION['salt'])) {
                    echo("<p style=\"color: green;\">Hacked!</p>");
                    session_destroy();
                    start();
                }
                else {
                    echo("<p style=\"color: red;\">Access denied!</p>");
                    $hash = $_SESSION['hash'];
                    checked($hash);
                }
            }
            else if(isset($_POST['clear'])) {
                session_destroy();
                echo("<p style=\"color: blue;\">Session cleared!</p>");
                start();
            }
            else {
                $pass = $_POST['password'];
                $_SESSION['salt'] = $_POST['salt'];
                $_SESSION['hash'] = crypt($pass, $_SESSION['salt']);
                $hash = $_SESSION['hash'];
                checked($hash);
            }   
        }
        else {
            start();
        }
    ?>
</body>
</html>