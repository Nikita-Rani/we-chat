<?php
$loggedin = false;
if(isset($_SESSION['loggedin']) && $_SESSION['loggedin']=true){
    $loggedin= true;
}
echo '<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>we-chat</title>
    <style>
        *{
            margin:0px;
            padding:0px;
        }
        .nav{
            background-color: #1e2118;
            display: flex;
            height:74px;
        }
        .nav li{
            list-style: none;
        }
        .nav li a{
            color: white;
            font-size: 27px;
            text-decoration: none;
            text-align:center;
            display: flex;
            margin-top:8px;
            flex-direction: row;
            padding: 11px 23px;
        }
    </style>
    
</head>
<body>
    <nav class="nav">
        <li><a href="home.php">Home</a></li>';
        if(!$loggedin){
        echo'<li><a href="login.php">Login</a></li>
        <li><a href="signup.php">Sign Up</a></li>';
        }
        if($loggedin){
        echo'<li><a href="logout.php">log out</a></li>';
        }
    echo '</nav>
</body>
</html>';
?>