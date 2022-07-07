$pdo = new PDO('mysql:dbname=lab4', 'root', '');
$fluent = new \Envms\FluentPDO\Query($pdo);
