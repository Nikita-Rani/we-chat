<?php
session_start();

if(!isset($_SESSION['loggedin'])||$_SESSION['loggedin']!=true){
    header("location: login.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome-<?php echo $_SESSION['username']; ?></title>
    <style>
         body{
           background:linear-gradient(rgb(201, 117, 128),white)
        }
        h1{
            text-align: center;
            padding:10px 10px;
            font-size: 74px;
            color: #2a20bf;
        }
        .container{
            min-height:89vh;
        }
    </style>
</head>
<body>
<?php require('partials/nav.php'); ?>
<div class="container">
<h1>
Welcome  to We-Chat  <?php echo $_SESSION['username']; ?>
</h1>
</div>
</body>
</html>
