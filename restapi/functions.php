<?php
function getPosts($pdo, $table) {
    $stmt = $pdo->query("SELECT * FROM `$table`");
    $postsList = [];
    while ($post = $stmt->fetch()) {
        $postsList[] = $post;
    }
    echo json_encode($postsList);
}

function getPost($pdo, $table, $id) {
    $stmt = $pdo->query("SELECT * FROM `$table` WHERE `id` = '$id'");
    if($stmt->rowCount() === 0) {
        http_response_code(404);
        $res = [
            "status" => false,
            "message" => "Post not found",
        ];
        echo json_encode($res);
    } else {
        $post = $stmt->fetch();
        echo json_encode($post);
    }
}

function addPost($pdo, $table, $data) {
    $title = $data['title'];
    $body = $data['body'];
    $pdo->query("INSERT INTO `$table` (`id`, `title`, `body`) VALUES (NULL, '$title', '$body')");

    http_response_code(201);
    $res = [
        "status" => true,
        "post_id" => $pdo->lastInsertId(),
    ];
    echo json_encode($res);
}

function updatePost($pdo, $table, $id, $data) {
    $title = $data['title'];
    $body = $data['body'];
    $pdo->query("UPDATE `$table` SET `title` = '$title', `body` = '$body' WHERE `$table`.`id` = '$id'");

    http_response_code(200);
    $res = [
        "status" => true,
        "message" => "Post is updated",
    ];
    echo json_encode($res);
}

function deletePost($pdo, $table, $id) {
    $pdo->query("DELETE FROM `$table` WHERE `$table`.`id` = '$id'");

    http_response_code(200);
    $res = [
        "status" => true,
        "message" => "Post is deleted",
    ];
    echo json_encode($res);
}