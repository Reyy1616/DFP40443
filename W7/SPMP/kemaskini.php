<?php
include('includes/header.php');
?>

<?php
if(isset($_GET["hantar_id"])){
    $edit_id=$_GET["hantar_id"];
    $stmt=mysqli_prepare($conn,"SELECT id,username,role_id FROM users WHERE id=?");
    mysqli_stmt_bind_param($stmt,"i",$edit_id);
    mysqli_stmt_execute($stmt);
    $result=mysqli_stmt_get_result($stmt);
    $result=mysqli_fetch_assoc($result);
    mysqli_stmt_close($stmt);
}
?>

<?php
$user_result=mysqli_query($conn,"SELECT users.id, username, roles.id");
?>

<?php if($result_array): ?>
    <form action="" method="POST">
        <input type="hidden" name="user_id" value="<?php echo $result_array['id'];?>">
        <label for="username">Username</label>
        <input type="text" name="username" value="<?php echo $result_array['username'];?>">
        <select name="role_id">
            <?php while($role=mysqli_fetch_assoc($user_result)):?>
                <option value="<?php echo $role['id'];?>" <?php if($role['id']==$result_array['role_id']) echo "selected";?>><?php echo $role['name'];?></option>
            <?php endwhile;?>
        <br><br>

        <label for="role_id">Role ID</label>
        <input type="text" name="role_id" value="<?php echo $result_array['role_id'];?>">
        <br><br>

        <input type="submit" value="Update User">

<h2>ALl USERS</h2>

<table border="1">
    <tr>
        <th>ID</th>
        <th>USERNAME</th>
        <th>ROLE ID</th>
    </tr>
    <?php while($row=mysqli_fetch_assoc($user_result)):?>
    <tr>
        <td><?php echo $row['id'];?></td>
        <td><?php echo $row['username'];?></td>
        <td><?php echo $row['role_id'];?></td>
    </tr>
    
<?php endwhile;?>
    </table>
    

<?php
include('includes/footer.php');
?>