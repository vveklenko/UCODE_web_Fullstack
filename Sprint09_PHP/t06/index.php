<?php
    include('./view/View.php');
    
    $router = new View("./model/signin.php");
    $router->render();
    exit;
?>