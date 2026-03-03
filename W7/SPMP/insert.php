<?php
require_once "includes/header.php";
?>

<?php
require_once("config/app_config.php");
$sqlPeranan="SELECT * FROM roles";
$HasilQSLPeranan=mysqli_query($conn,$sqlPeranan);

$mesej="";


if ($_SERVER["REQUEST_METHOD"]=="POST")
{
    $namapengguna=$_POST["username"];
    $katalaluan=$_POST["password"];
    $email=$_POST["email"];
    $peranan_id=$_POST["peranan_id"];
    


    $arahansql= mysqli_prepare ($conn,"INSERT INTO user (username,password,email,roleid) VALUES (?,?,?)");
    mysqli_stmt_bind_param($arahansql,"ssi",$namapengguna,$katalaluan,$peranan_id,$email);
    if (mysqli_stmt_execute($arahansql)){
        $mesej="<p style='color:green'>Data berjaya dimasukkan</p>";
}else{
    $mesej="<p style='color:red'>Data gagal dimasukkan</p>".mysql_stmt_error($arahansql);
}
$HasilQSLPeranan=mysqli_query($conn,$sqlPeranan);
}
?>


<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SPMP | Pengguna Baru</title>
</head>
<body>
    <?php echo $mesej;?>
    <form method="POST" action="">
        <h2>ENTER NEW USER</h2>
        
        username: <input type="text" name="username"><br>
        password: <input type="password" name="password"><br>
        email: <input type="email" name="email"><br>
        <select name="peranan_id">
            <option value="">--Sila Pilih Peranan</option>
            <?php while($row = mysqli_fetch_assoc($HasilQSLPeranan)):?>
            <option value="<?php echo $row['id'];?>">
                <?php echo $row['name'];?></option>
            <?php endwhile;?>
            
</select>
        <input type="submit" value="MASUK DATA">
    </form>
</body>
</html>

<?php
require_once "includes/footer.php";
?>