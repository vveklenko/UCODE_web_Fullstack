<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sites</title>
</head>
<body>
    <form action="index.php" method="post">
        <h1>Show other sites</h1>
        <p>
            <input type="text" placeholder="url" name="url">
            <input type="submit" value="GO" name="go">
            <a href="http://localhost:3000/vveklenko/t08/index.php">BACK</a>
        </p>
    </form>

    <?php
        if(isset($_POST['go'])) {
            $url = $_POST['url'];
            if(stristr($url, "https://") !== FALSE) {
                echo "url: ".$url;
                $html = file_get_contents($url);
                list($begin, $end) = explode("<body>", $html);
                list($body, $useless) = explode("</body>", $end);
                $body = "<body>".$body."\n</body>";
                $body = str_replace("<", "&lt", $body);
                $body = str_replace(">", "&gt", $body);
                echo "<pre>".$body."</pre>";
                
            }
            else {
                echo "Wrong input!";
            }
        }
        else {
            echo "<p>Type an URL...</p>";
        }
    ?>

</body>
</html>