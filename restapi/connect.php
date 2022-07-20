<?php
$host = 'localhost';
$db = 'api';
$user = 'root';
$pass = 'root';
$charset = 'utf8';
$table = 'posts';

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
//задаем опции, где режим выдачи ошибок задаем только в виде исключений
//fetch_mode ставим по умолчанию
$opt = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES => false,
];
$pdo = new PDO($dsn, $user, $pass, $opt);