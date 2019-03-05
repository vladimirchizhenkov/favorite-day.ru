<?php

include_once $_SERVER['DOCUMENT_ROOT'] . '/model/m_post.php';

$getPreviewPost    = getPreviewPost();

$pageTitle         = 'Favorite Day | Обзоры';

$innerContent      = setTemplate('v_post', ['getPreviewPost' => $getPreviewPost]);
$innerAside        = setTemplate('v_aside', ['getPostCategories' => $getPostCategories]);

