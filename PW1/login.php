<?php 
session_start();
$loggedin=isset($_SESSION['username']);
?>
<html>
    <head>
        <title>Login Page</title>
</head>

<body>
    <h1  style="text-align: center; ">PHP Knowledge Questions</h1>
    <p  style="text-align: center;" >Answer ALL questions.</p>
<form  style="text-align: center;" action="page1.php" method="POST">Enter Name:
    <input type="text" name="username">      
    <input type="submit" value="Start Quiz">    
</body>
