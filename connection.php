<?php

$dsn = 'mysql:host=localhost;dbname:task_1';
$user = 'root';
$password = '';

try{
    $db = new PDO($dsn, $user, $password);
} catch(PDOException $e){
    echo 'failed ' . $e -> getMessage();
}