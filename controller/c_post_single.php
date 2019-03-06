<?php

include_once $_SERVER['DOCUMENT_ROOT'] . '/model/m_post.php';

$getIdPost     = $_GET['post_id'];
$getPostSingle = getPostSingle($getIdPost);

if ($getPostSingle) {
    $pageTitle    = SITENAME . ' | Обзор: ' . $getPostSingle['post_title'];
    $innerContent = setTemplate('v_post_single', ['getPostSingle' => $getPostSingle]);
}

else {
    $pageTitle    = SITENAME . ' | Page Not Found';
    $innerContent = setTemplate('v_404');
}

