<?php
require_once "config/app_config.php";

$username = $_POST['username'];
$password = $_POST['password'];

$sql = "SELECT user.id, user.username, user.password, roles.name  FROM user JOIN roles ON roles.id = user.roleid WHERE user.username=?";

$stmt = mysqli_prepare($conn, $sql);
mysqli_stmt_bind_param($stmt, "s", $username);
//mysqli_stmt_execute($stmt);
mysqli_stmt_execute($stmt);

mysqli_stmt_bind_result($stmt, $id, $uname, $db_password, $role);

if (mysqli_stmt_fetch($stmt)){
   

if($password== $db_password){
    header("Location: dashboard.php");
    exit;
}  
}
    header("Location: login.php");
exit;

?>