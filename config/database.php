<?php
    //Database configuration
    $host     = 'localhost'; //=>127.0.0.1
    $dbname   = 'pets';
    $username = 'postgres';
    $password = 'pgadmin4';
    $port     = '5432';

    $conn = pg_connect("
        host     = $host 
        dbname   = $dbname 
        user     = $username
        password = $password 
        port     = $port
    ");

    if(!$conn)  {
        die("connection error" . pg_last_error());
    } else  {
        
    }
?>         