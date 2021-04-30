<?php
    $pubkey = "dae40193c8d9815cec81f86053349123";
    $prikey = "02291d7001519b480d8f1d8a6af13ebbe3ac18e9";
    $time = time();
    $url = "https://gateway.marvel.com:443/v1/public/characters?limit=2&ts=$time&apikey=$pubkey&hash=".md5($time.$prikey.$pubkey);
    $curl = curl_init();
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($curl, CURLOPT_URL, $url);
    $html = curl_exec($curl);
    curl_close($curl);
    $json = json_decode($html, true);
?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Marvel API</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
    <style>
        body {
            background-color: rgb(55, 50, 63);
        }
        #elem-box {
            background-color: rgb(20, 11, 34);
            border: 2px solid rgb(194, 3, 3);
            padding: 10px;
            margin: 5px;
        }
        #data-container {
            background-color: rgb(55, 50, 63);
            border: 2px solid rgb(194, 3, 3);
            padding: 10px;
            margin: 10px;
        }
        #data-text {
            color: white;
            margin-left: 10px;
        }
        #key {
            color: rgb(74, 216, 202);
        }
        #colon {
            color: gray;
        }
        #value {
            color: green;
        }
    </style>
    <?php
        function jsonParse($json) {
            foreach ($json as $key => $value) {
                if (!is_array($value) && !is_object($value)) {
                    echo("
                    <div id=\"elem-box\">
                        <span id=\"key\">$key</span>
                        <span id=\"colon\">:</span>
                        <span id=\"value\">$value</span>
                    </div>
                    ");
                }
                else {
                    echo("<div id=\"data-container\">
                    <span id=\"data-text\">$key:</span>");
                    jsonParse($value);
                    echo("</div>");
                }
            }
        }
        jsonParse($json);
    ?>
    </body>
</html>