<?php
    session_start();
    include("connection.php");  

    $pdoQuery = "UPDATE `products` SET `p_name`=:p_name, `u_id`=:u_id, `p_amount`=:p_amount, `p_price`=:p_price WHERE `p_id`=:p_id";
    $pdoQueryPull = "SELECT * FROM products";
    $pdoQuery_run = $pdo->prepare($pdoQuery);
    $pdoQuery_pull = $pdo->query($pdoQueryPull);

    if($_SERVER['REQUEST_METHOD'] == "POST"){
        $p_name = $_POST['product_name'];
        $p_amount = $_POST['product_amount'];
        $p_price = $_POST['product_price'];
        $u_id = $_SESSION['user_id'];
        $p_id = $_GET['id'];
        $flag = 0;
        while($row = $pdoQuery_pull->fetch()){
            if(($p_name == $row->p_name && $u_id == $row->u_id) && $p_id != $row->p_id){
                $flag = 1;
                break;
            }
        }
        if($flag == 0){
            echo "Helo";    
            $pdoExec = $pdoQuery_run->execute(array(":p_name"=>$p_name,":u_id"=>$u_id,":p_amount"=>$p_amount,":p_price"=>$p_price,":p_id"=>$p_id));
    
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
        <h1>Edit Product</h1>
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