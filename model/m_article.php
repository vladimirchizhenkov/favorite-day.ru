<?php

include_once $_SERVER['DOCUMENT_ROOT'] . '/model/m_db.php';

function getPreviewArticle() {
    $query = db_query("SELECT * FROM article");
    $getPreviewArticle = $query->fetchAll();
    return $getPreviewArticle;
}

function getArticleSingle($id_article) {
    $params = ['id_article' => $id_article];
    $query = db_query("SELECT * FROM article WHERE id_article = :id_article", $params);
    $getArticleSingle = $query->fetch();
    return $getArticleSingle;
}