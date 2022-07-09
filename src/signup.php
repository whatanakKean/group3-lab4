<?php

    include("connection.php");  

    $sql = "SELECT * FROM users";
    $result = mysqli_query($conn, $sql);
    $resultCheck = mysqli_num_rows($result);

    if($_SERVER['REQUEST_METHOD'] == "POST"){
        $user_gmail = $_POST['user_gmail'];
        $user_gender = $_POST['user_gender'];
        $user_class = $_POST['user_class'];
        $password = $_POST['password'];
        $user_name = $_POST['user_name'];
        $flag = 0;

        if($resultCheck > 0){
            while($row = mysqli_fetch_assoc($result)){
                if($user_gmail == $row['u_gmail']){
                    $flag = 1;
                    break;
                }
            }
            if($flag == 0){
                echo "hello?";
                $values = array('u_name' => $user_name, 'u_gender' => $user_gender, 'u_class' => $user_class, 'u_password' => $password, 'u_gmail' => $user_gmail);
                
                $query = $fluent->insertInto('users', $values)->execute();
    
                header("Location: login.php");
            }
        }
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create user</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>

    <h1 style="margin: 30px 0px 0px 45px;">Sign Up</h1>
    <div style="padding: 30px 0px 0px 45px;">
        <form action="" method="POST" style="margin-bottom: 10px;">
            <div class="form-group">
                <label for="inputEmail1">Email address</label>
                <input type="email" class="form-control w-25" id="inputEmail1" name="user_gmail"aria-describedby="emailHelp" placeholder="Enter email" required >
            </div>

            <div class="form-group">
                <label for="inputName">UserName</label>
                <input type="text" class="form-control w-25" id="inputName" name="user_name"aria-describedby="emailHelp" placeholder="Enter Name" required >
            </div>

            <div class="form-group">
                <label for="inputGender">Gender</label><br>
                <select class="form-select" name="user_gender" aria-label="Default select example"id="inputGender" required>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                    <option value="Others">Others</option>
                </select>
            </div>

            <div class="form-group">
                <label for="inputClass">Class</label><br>
                <select class="form-select" name="user_class" aria-label="Default select example" id="inputClass" required>
                    <option value="CS">CS</option>
                    <option value="TN">TN</option>
                    <option value="EC">EC</option>
                </select>
            </div>

            <div class="form-group">
                <label for="inputPassword1">Password</label>
                <input type="password" class="form-control w-25" id="inputPassword  " name="password" placeholder="Password" required >
            </div>
            <button type="submit" class="btn btn-primary mr-2">Submit</button>
            <button type="reset" class="btn btn-primary">Reset</button>
        </form>
        <a href="login.php">Click to Login</a>
    </div>

</body>
</html>