<?php
ini_set('display_errors', 'On');
header('Content-Type:text/plain', true);

spl_autoload_register(function ($className) {
    require_once "src/{$className}.php";
});

// $pdo = (new PDOClient('mysql', 'localhost', 'store', 'root', ''))->connect();
// $users = $pdo->select("select * from users")->get();
$mysqli = (new MySQLiClient('localhost', 'store', 'root', ''))->connect();
$users = $mysqli->select("select * from users")->get();
var_dump($users);
