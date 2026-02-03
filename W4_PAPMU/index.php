<?php
$config = include('config/app_config.php');
require_once('includes/alumni_logic.php');

$isLoggedIn=false;

if($_SERVER['REQUEST_METHOD']=='POST'){
 try{
    $user=$_POST['username'];
    $pass=$_POST['password'];

    if ($user !== $config['admin_user']||$pass !== $config ['admin_pass']){
        echo "Kamu nub";
    }$isLoggedIn=true;

 }catch(Execption $e){

 }

}

?>

<html>
    <head>
<title>
    <?php echo $config['site_name']; ?>
</title>

</head>
<body style="background-color: #0aa368"
;>
<header>
<nav>
<ul style="display: flexible; list-style-type: none;">
<?php echo generateMenu($pages); ?>
</ul>
</nav>
  </header>
 
  <?php if($isLoggedIn); 
  ?>
  <h1>WELCOME <?php echo $_POST['username'];
  ?></h1>

 <p>ayamLorem Ipsum is simply dummy text of the printing and typesetting industry.
     Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries,</p>


  <footer>
    <?php  echo $config['admin_email']; ?>
  </footer>
</body>
</html>