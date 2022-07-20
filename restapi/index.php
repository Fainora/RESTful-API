<?php
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: *');
header('Access-Control-Allow-Headers: *');
header('Access-Control-Allow-Credentials: true');
header('Content-type: json/application');
require 'connect.php';
require 'functions.php';

$method = $_SERVER['REQUEST_METHOD'];

$q = $_GET['q'];
$params = explode('/', $q); //разбиваем строку через '/'
$type = $params[0];
if(isset($params[1])) {
    $id = $params[1];
}

if($method === 'GET') {
    if($type === 'posts') {
        if(isset($id)) {
            getPost($pdo, $table, $id);
        } else {
            getPosts($pdo, $table);
        }
        
    }
} elseif ($method === 'POST') {
    if($type === 'posts') {
        addPost($pdo, $table, $_POST);
    }
} elseif ($method === 'PATCH') {
    if($type === 'posts') {
        if(isset($id)) {
            $data = file_get_contents('php://input');
            $data = json_decode($data, true);
            updatePost($pdo, $table, $id, $data);
        }
    }
} elseif ($method === 'DELETE') {
    if($type === 'posts') {
        if(isset($id)) {
            deletePost($pdo, $table, $id);
        }
    }
}
