<?php

include_once $_SERVER['DOCUMENT_ROOT'] . '/model/m_article.php';

$pageTitle = 'Favorite Day | Новости из жизни OUTDOOR-сообщества';
$getPreviewArticle = getPreviewArticle();

$innerContent = setTemplate('v_article', ['getPreviewArticle' => $getPreviewArticle]);
