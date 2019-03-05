<?php

include_once ('mode/somemodel.php');

if (count($_POST) > 0) {
    $name = trim($_POST['name']);
    $text = trim($_POST['text']);

    if($name == '' || $text == '') {

        // так же и другие проверки;
        $msg = 'Заполните поля';
    }

    else {
        $someData = someFunc($name, $text);
        header('location: ...');
        exit();
    }
}

else {
    $name = '';
    $text = '';
    $msg = '';
}

include ('view/sometpl.php');