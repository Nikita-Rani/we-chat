<?php 
$showAlert = false;
$showError = false;
if($_SERVER["REQUEST_METHOD"]=="POST"){
    require('partials/connect.php'); 
    $username = $_POST["username"];
    $password = $_POST["password"];
    $cpassword = $_POST["cpassword"];
    $exists=false;
    if(($password==$cpassword) && $exists==false){
        $sql = "INSERT INTO `userinfo` (`username`, `password`) VALUES ('$username', '$password')";
        $result = mysqli_query($conn , $sql);
        if($result){
                $showAlert = true;
        }
    }
    else{
        // $showError = "Paswwords do not match";
        echo "password do not match";
    }
}
?>

<?php
require('partials/nav.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <style>
        body{
           background:linear-gradient(rgb(201, 117, 128),white)
        }
        .container1{
            margin-top:10px;
        }
        h1{
            text-align: center;
            padding:10px 10px;
            font-size: 74px;
            color: #2a20bf;

        }
        h2{
            text-align: center;
            margin-top: 10px;
            padding:10px 10px;
            font-size: 44px;
            color: #d46c22;

        }
        .container{
            display: flex;
            justify-content: center;
            padding: 25px 552px;

        }
        .form{
            width: 49%;
            padding: 28px 124px;
        } 
        .input{
            padding: 16px 178px;
            margin: 8px;
            border: 2px solid grey;
            border-radius: 10px;
            /* font-size: 34px; */
        }
        .btn{
            margin-top: 12px;
            height: 50px;
            font-size: 20px;
            padding: 2px 80px;
            border: 2px solid grey;
            border-radius: 12px;
        }
    </style>
</head>
<body>
    <div class="container1">
    <h1>Welcome to We-Chat</h1>
    <h2>Sign Up to create an account</h2>
    </div>

    <div class="container">
    <form action="/login/signup.php"method="post"class="form">
        <label for="username">Username</label><br>
        <input type="text"name="username"id="username"class="input"><br>
        <label for="password">password</label><br>
        <input type="password"name="password"id="password"class="input"><br>
        <label for="cpassword">confirm Password</label><br>
        <input type="password"name="cpassword"id="cpassword"class="input"><br>
        <small>type same password</small><br>
        <button class="btn">SignUp</button>
    </form>
    </div>
    <?php
        if($showAlert){
            echo "Succesfuly signed up";
        }
    ?>
</body>
</html>