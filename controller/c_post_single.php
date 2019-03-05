<?php

include_once $_SERVER['DOCUMENT_ROOT'] . '/model/m_post.php';

$getIdPost = $_GET['post_id'];

$getPostSingle = getPostSingle($getIdPost);

$pageTitle = 'Favorite Day | Обзор: ' . $getPostSingle['post_title'];

$innerContent = setTemplate('v_post_single', ['getPostSingle' => $getPostSingle]);