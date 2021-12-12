<?php

    if(empty($_GET['x'])){
        echo "<script>window.location ='home';</script>";}
    elseif($_GET['x'] == 'home'){
        include_once "home.php";}
    elseif($_GET['x'] == 'perizinan'){
        include_once "perizinan.php";}
    elseif($_GET['x'] == 'notifikasi'){
        include_once "notifikasi.php";}
    elseif($_GET['x'] == 'contact'){
        include_once "contact.php";}
    else{
        echo "<script>window.location ='home';</script>";
}

?>