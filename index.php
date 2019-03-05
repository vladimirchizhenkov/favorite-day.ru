<?php

//подключаем библиотеки //
include_once 'config.php';
include_once 'model/m_system.php';

session_start();

$error404   = false;
$controller = $_GET['c'] ?? 'index';
$getUri     = getUri();

if (!file_exists('controller/c_' . $controller . '.php') || $controller == '' || !file_exists($getUri)) {
    $error404 = true;
}

if (!$error404) {

    include_once 'controller/c_' . $controller . '.php';

    switch ($controller) {
        case 'index':
            echo setTemplate('v_main_double', ['innerContent' => $innerContent, 'innerAside' => $innerAside, 'pageTitle' => $pageTitle]);
            break;
        case 'post_single':
            echo setTemplate('v_main', ['innerContent' => $innerContent, 'pageTitle' => $pageTitle]);
            break;
        case 'article':
            echo setTemplate('v_main', ['innerContent' => $innerContent, 'pageTitle' => $pageTitle]);
            break;
        case 'tour':
            echo setTemplate('v_main', ['innerContent' => $innerContent, 'pageTitle' => $pageTitle]);
            break;
        case 'shand':
            echo setTemplate('v_main', ['innerContent' => $innerContent, 'pageTitle' => $pageTitle]);
    }
}

else {
    $innerContent = setTemplate('v_404');
    echo setTemplate('v_main', ['innerContent' => $innerContent]);
}