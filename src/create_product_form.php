<?php

    require '../vendor/autoload.php';
    include("connection.php");  

    if($_SERVER['REQUEST_METHOD'] == "POST"){
        $user_gmail = $_POST['user_gmail'];
        $user_gender = $_POST['user_gender'];
        $user_class = $_POST['user_class'];
        $password = $_POST['password'];
        $user_name = $_POST['user_name'];

        $values = array('u_name' => $user_name, 'u_gender' => $user_gender, 'u_class' => $user_class, 'u_password' => $password, 'u_gmail' => $user_gmail);

        $query = $fluent->insertInto('users', $values)->execute();
        $fluent->close();

        // header("Location: table.php");
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
    <div style="padding: 30px 0px 0px 45px;">
        <form action="" method="POST" style="margin-bottom: 10px;">
            <div class="form-group">
                <label for="inputName">Product Name</label>
                <input type="text" class="form-control w-25" id="inputProductName" name="product_name" placeholder="Enter Product Name" required >
            </div>

            <button type="submit" class="btn btn-primary mr-2">Submit</button>
            <button type="reset" class="btn btn-primary">Reset</button>
        </form>
    </div>
</body>
</html>