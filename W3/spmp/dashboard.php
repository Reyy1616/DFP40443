<?php
session_start();

if(!isset($_SESSION['loggedin']))
    {
        header("Location:login.php");
        exit();
    }
?>

<html>
    <head>
</head>
<body>
<h3>Hi Bang <?php echo $_SESSION['username']; ?> </h3>
    <a href="about.php">About</a><br>
    <a href="aboutme.php">Tentang Saya</a><br>
    <a href="index.php">Index</a><br>
    <a href="logout.php">LOGOUT</a>
</body>
</html>