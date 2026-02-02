<?php
session_start();
?>
<h1>WELCOME, <?php
echo $_SESSION['username'];
?>!</h1>

