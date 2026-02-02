<?php

function isItZul($user,$pass){
    $admin_user ="zul";
    $admin_pass ="1234";

    return($user=== $admin_user && $pass===$admin_pass);
} 
?>