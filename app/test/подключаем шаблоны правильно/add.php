<?php

include_once ('mode/message.php');
include_once ('mode/system.php');

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

$tpl_inner = template('v_add', [
    'name' => $name,
    'text' => $text,
    'msg' => $msg]);

template('v_main', [
    'title' => 'Добавление сообщения',
    'content' => $tpl_inner]);
