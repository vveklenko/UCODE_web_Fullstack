<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SERVER</title>
</head>
<body>
    <?php 
        echo "a name of file of the executed script: ". $_SERVER['PHP_SELF']. "<br>";
        echo "arguments passed to the script: ". $_SERVER['argv']. "<br>";
        echo "IP address of the server: ". $_SERVER['SERVER_ADDR']. "<br>";
        echo "a name of host that invoke current script: ". $_SERVER['SERVER_NAME']. "<br>";
        echo "a name and a version of the information protocol: ". $_SERVER['SERVER_PROTOCOL']. "<br>";
        echo "a query method: ". $_SERVER['QUERY_STRING']. "<br>";
        echo "User-Agent information: ". $_SERVER['HTTP_USER_AGENT']. "<br>";
        echo "IP address of the client: ". $_SERVER['REMOTE_ADDR']. "<br>";
        echo "a list of parameters passed by URL: ". $_SERVER['PATH_INFO']. "<br>";
    ?>
</body>
</html>