<?php 
require 'includes/function.php';
include 'includes/header.php';

if(isset($_POST['user'])&& isset ($_POST['pass'])){

$user=$_POST['user'];
$pass=$_POST['pass'];

if (isItZul($user,$pass)){
    echo "<h1>Welcome to dashboard</h1>";
    echo "<p>Succesfully authenticated as:". htmlspecialchar($user)."</p>";

}else {
    echo "<h2 style='color:red;'>Access Denied!</h2>";
    echo "<a href='index.php'>TRY AGAIN</a>";
}

}
else{
    echo "<h2>Please login first.</h2>";
}

include 'includes/footer.php';


?>


