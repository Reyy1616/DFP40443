
<html>

<head>
</head>
<body>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
<label>Kelvin</label>
<input name="KelvinVal">
<input type="submit" value="Calculate">
</form>
</body>


<?php 
if ($_SERVER['REQUEST_METHOD']=="POST"){

$kelvin=$_POST['KelvinVal'];
$celcius = $kelvin - 273.15;

if($celcius<50){
    echo "mild";

}elseif ($celcius<30) {
    echo "cold";
}
}else {
    echo "hot";
}



?>


<?php

echo $celcius;

?>


</html>
