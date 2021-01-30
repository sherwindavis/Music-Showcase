<?php
session_start();

$check = "hello";

if(isset($_POST['name'])&& isset($_POST['pass'])){
    if(strlen($_POST['name']) < 1 && strlen($_POST['pass']<1)){
        $failure = "Enter Username & Password.";
    }
    else{
        if($check==$_POST['pass']){
            $_SESSION["pass"]=$_POST["pass"];
            $_SESSION["name"]=$_POST["name"];
            header("Location: home.php?");
            return;
        }
        else{
                echo("Incorrect Password !");
        }
 }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="#72acf5" />
    <link rel="icon" href="./assets/favicon.png" type="image/icon type">
    <title>Login</title>
</head>
<body>
<link href="https://fonts.googleapis.com/css?family=Quicksand:300,500" rel="stylesheet">
<div id='square'></div>
  <div id="logincard">
      <strong><p1>Hello!</p1></strong>
      <div><p2>Sign In to your account.</p2></div>
      <form  method="POST">
          <input id ="username" type="text" name="name" placeholder="Username"></input>
          <input type="password" id="pass" name="pass" placeholder="Password"></input>
          <input type ="submit" id ="submit" value="LOGIN"></input>
          <label id="submit>"></label>
</form>
</div>  
<link rel ="stylesheet" href="/login.css">
</body>
</html>