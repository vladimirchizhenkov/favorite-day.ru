<?php

include_once('model/model_function.php');

$getSomeData = someFunction();

switch ($_GET['view'] ?? null) {
    case 'base':
        $template = 'v_index';
        break;
    case 'inline':
        $template = 'v_index_inline';
        break;
    default:
        $template = 'v_index';
}

include "view/$template.php";