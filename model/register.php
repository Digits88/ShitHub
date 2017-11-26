<?php
    
    $table    = "User";
    
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    $db = new SQLite3('../shithub_database.db');
    
    $db-> exec("INSERT INTO $table (
    Name,
    Password) VALUES (
    '$username',
    '$password'
    )");
?>
