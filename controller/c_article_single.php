<?php

include_once $_SERVER['DOCUMENT_ROOT'] . '/model/m_article.php';

$getArticleId     = $_GET['id_article'];
$getArticleSingle = getArticleSingle($getArticleId);

if ($getArticleSingle) {
    $pageTitle    = SITENAME . ' | Статья: ' . $getArticleSingle['article_title'];
    $innerContent = setTemplate('v_article_single', ['getArticleSingle' => $getArticleSingle]);
}

else {
    $pageTitle    = SITENAME . ' | Page Not Found';
    $innerContent = setTemplate('v_404');
}
