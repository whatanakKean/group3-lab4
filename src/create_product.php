<?php
    session_start();
    include("connection.php");  

    $pdoQuery = "SELECT * FROM products";
    $pdoQuery_run = $pdo->query($pdoQuery);

    if($_SERVER['REQUEST_METHOD'] == "POST"){
        $product_name = $_POST['product_name'];
        $product_amount = $_POST['product_amount'];
        $product_price = $_POST['product_price'];
        $user_id = $_SESSION['user_id'];
        $flag = 0;
        while($row = $pdoQuery_run->fetch()){
            if($product_name == $row->p_name && $user_id == $row->u_id){
                $flag = 1;
                break;
            }
        }
        if($flag == 0){
            $values = array('p_name' => $product_name, 'u_id' => $user_id,'p_amount' => $product_amount, 'p_price' => $product_price);

            $query = $fluent->insertInto('products', $values)->execute();
    
            header("Location: table.php");
        }
        else{
            echo '<script> alert("Product existed")</script';
        }
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create product</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
    <?php include_once("header.php") ?>
    <div style="padding: 30px 0px 0px 45px;">
        <form action="" method="POST" style="margin-bottom: 10px;">
            <div class="form-group">
                <label for="inputProductName">Product Name</label>
                <input type="text" class="form-control w-25" id="inputProductName" name="product_name" placeholder="Product name" required >
            </div>

            <div class="form-group">
                <label for="inputName">Product Amount</label>
                <input type="number" class="form-control w-25" id="inputProductAmount" name="product_amount" placeholder="Product amount" required >
            </div>

            <div class="form-group">
                <label for="inputProductPrice">Product Price</label>
                <input type="number" step=".01" class="form-control w-25" id="inputProductPrice" name="product_price" placeholder="Product price" required >
            </div>

            <button type="submit" class="btn btn-primary mr-2">Submit</button>
            <button type="reset" class="btn btn-primary">Reset</button>
        </form>
        <a href="table.php">Main Page</a>
    </div>
</body>
</html>