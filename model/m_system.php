<?php

function setTemplate($tplName, $vars = []) {
    extract($vars);

    ob_start();
    include $_SERVER['DOCUMENT_ROOT'] . "/view/$tplName.php";
    return ob_get_clean();
}

function setTemplatePart($tplName, $vars = []) {
    extract($vars);

    ob_start();
    include $_SERVER['DOCUMENT_ROOT'] . "/view/tpl_part/$tplName.php";
    return ob_get_clean();
}

function getUri() {
    $uri_parts  = explode('?', $_SERVER['REQUEST_URI'], 2);
    $getUri     = substr($uri_parts[0], 1);
    return $getUri;
}

