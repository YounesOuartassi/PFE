<?php

    $serverName = 'localhost';
    $userName = 'root';
    $password = '';
    $dbName = 'admin_db';


    $conn2 = mysqli_connect('localhost','root','','admin_db');


    if(!$conn2){
        dir("connection fialed "  . mysqli_connect_error());
    }
    
?>