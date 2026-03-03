<?php
require_once("config/app_config.php");
$maklumat = mysqli_query($conn,"SELECT * FROM user join roles on user.roleid=roles.id")or die(mysqli_error($conn));
$pengguna=mysqli_fetch_assoc($maklumat);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SPMP | Delete User</title>
</head>
<body class="bg-fluid bg-dark text-white">
    <div class="container mb-3">
    <h2 class="text-center">DELETE USER</h2>
    <table class="table table-dark table-striped text-white" >
        <tr>
            <th>ID</th>
            <th>NAMA PENGGUNA</th>
            <th>PERANAN</th>
            <th>TINDAKAN</th>
        </tr>
        <?php while($pengguna = mysqli_fetch_assoc($maklumat)):?>
            <tr>
            <td><?php echo $pengguna['id'];?></td>
            <td><?php echo $pengguna['username'];?></td>
            <td><?php echo $pengguna['roleid'];?></td>
            <td><input type="submit" value="DELETE" class="btn btn-danger"></td>
            <?php endwhile;?>
        </tr>
        </div>
</table> 
</body>
</html>



