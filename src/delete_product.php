<?php
    include("connection.php");
    $product_id = $_GET['id'];
    echo $product_id;

    $query = $fluent->deleteFrom('products')->where('p_id', $product_id)->execute();
    header("Location: table.php");
?>