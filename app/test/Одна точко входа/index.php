<?php

// плодключаем все библиотеки:

include_once 'm/system';
include_once 'm/functions'; // и тог далий

session_start();

// контроллер есть в папке, контроллер состоит из безопасных символов //

$controller = $_GET['c'] ?? 'home';
include_once("c/$controller.php");

echo template('v_main', ['title' => $title, 'content' => $content]);