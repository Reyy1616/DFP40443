<?php
session_start();

if($_SERVER["REQUEST_METHOD"]=="POST"){
    $namapengguna=$_POST['user'];
    $katalaluan=$_POST['password'];

    if ($namapengguna== "Zul"&& $katalaluan=="root"){
        $_SESSION['loggedin']=true;
        $_SESSION['username']=$namapengguna;
        
        header("Location:dashboard.php");
        exit();
    }else{
        $error="Invalid credentials!";

    }
    }

?>

<form method="POST" action="">
    <label>Username</label>
    <input type="text"
    name="user">
    <label>Password</label>
    <input type="password"
    name="password">
    <input type="submit" value="login">
</form>


