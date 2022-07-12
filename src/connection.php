<?php
    require '../vendor/autoload.php';
    $pdo = new PDO('mysql:host=localhost:3306;dbname=lab4', 'root', '');
    $fluent = new \Envms\FluentPDO\Query($pdo);

    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_OBJ);
?>


