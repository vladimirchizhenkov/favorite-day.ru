<?php

// заглядываем в шаблон и смотрим на переменные, которые нужны, передаем в параметры, например:

function template_main($title, $content) {
    include 'v/v_message';
}


// универсальная ф-ция подкл шаблонов

function template($tpl_name, $vars = []) {
    extract($vars); // <- распаковываем массив в вид $a = valueA, $b = valueB, $c = valueC;
    ob_start(); // <- кладем в буфер инклюд, чтобы он не подключал шаблон, а уходил переменной в return
    include 'v/$tpl_name';
    return ob_get_clean();
}