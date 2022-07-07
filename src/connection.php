<?php
    $pdo = new PDO('mysql:host=localhost:3308;dbname=lab4', 'root', '');
    $fluent = new \Envms\FluentPDO\Query($pdo);
?>
