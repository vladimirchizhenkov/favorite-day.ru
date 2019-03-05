<?php

include_once $_SERVER['DOCUMENT_ROOT'] . '/model/m_tour.php';

$pageTitle = 'Favorite Day | Туры';
$getPreviewTour = getPreviewTour();

$getSliderTpl = setTemplatePart('v_slider_full');
$innerContent = setTemplate('v_tour', ['getPreviewTour' => $getPreviewTour, 'getSliderTpl' => $getSliderTpl]);