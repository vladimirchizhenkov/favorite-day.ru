<?php

$id = $GET_['some'] ?? null;
$error404 = false;

if ($id === null || $id == '') {
    $error404 = true;
}

else {
    $getSomeData = someFunc($param);

    if ($getSomeData === false) {
        $error404 = true;
    }
}

include_once('view/message.php');