<?php
    require '../vendor/autoload.php';
    $pdo = new PDO('mysql:host=localhost:3308;dbname=lab4', 'root', '');
    $fluent = new \Envms\FluentPDO\Query($pdo);
?>

<?php
    $user = 'root';
    $password = '';
    $db = 'lab4';

    $conn = new mysqli('localhost:3308', $user, $password , $db);
?>
