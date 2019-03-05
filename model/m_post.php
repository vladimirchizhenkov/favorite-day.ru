<?php

include_once 'm_db.php';


// получаем превью постов в блог (обзоры);
function getPreviewPost() {
    $query = db_query("SELECT * FROM `post`");
    $getPreviewPost = $query->fetchAll();
    return $getPreviewPost;
}

// получаем одиночный пост блога (обзоры);
function getPostSingle($id_post) {
    $params = ['id_post' => $id_post];
    $query = db_query("SELECT * FROM `post` WHERE id_post = :id_post", $params);
    $getPostSingle = $query->fetch();
    return $getPostSingle;
}

function getPostCategories() {
    $query = db_query("SELECT * FROM `category_post`");
    $getPostCategories = $query->fetchAll(PDO::FETCH_ASSOC);
    return $getPostCategories;
}

//https://toster.ru/q/474425

