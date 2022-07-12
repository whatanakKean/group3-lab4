<?php
    session_start();
    include("connection.php");  

    $query = $fluent->from('users');

    if($_SERVER['REQUEST_METHOD'] == "POST"){
        $user_gmail = $_POST['user_gmail'];
        $user_password = $_POST['password'];
        
        while($row = $query->fetch()){
            if($user_gmail == $row->u_gmail && $user_password == $row->u_password){
                $_SESSION['user_gmail'] = $row->u_gmail;
                $_SESSION['user_id'] = $row->u_id;
                header("Location: table.php");
            }
        }
        echo '<script> alert("Incorrect Info")</script';
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
    <div class="container my-5">
        <h1>Login</h1>
        <div class="mt-5">
            <form action="" method="POST" style="margin-bottom: 10px;">
                <div class="form-group">
                    <label for="inputEmail1">Email address</label>
                    <input type="email" class="form-control w-25" id="inputEmail1" name="user_gmail"aria-describedby="emailHelp" placeholder="Enter email" required >
                </div>

                <div class="form-group">
                    <label for="inputPassword1">Password</label>
                    <input type="password" class="form-control w-25" id="inputPassword1" name="password" placeholder="Password" required >
                </div>
                <button type="submit" class="btn btn-primary mr-2">Submit</button>
                <button type="reset" class="btn btn-primary">Reset</button>
            </form>
            <a href="signup.php">Click to Sign Up</a>
        </div>
    </div>
</body>
</html>