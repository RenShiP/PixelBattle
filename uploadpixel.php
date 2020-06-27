<?php

    $mysqli = new mysqli ("localhost", "root", "", "threads");
    $mysqli->query("SET NAMES 'utf8'");
    

    $tempcolor = $_POST[ucolor];
    $tempid = (integer) $_POST[aidi];


    $mysqli->query("UPDATE colors SET Color = '$tempcolor' WHERE Number = '$tempid';");
    echo $tempid;

    $mysqli->close();
   
    
?>