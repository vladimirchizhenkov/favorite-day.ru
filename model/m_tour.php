<?php

include_once $_SERVER['DOCUMENT_ROOT'] . '/model/m_db.php';

function getPreviewTour() {
    $query = db_query("SELECT * FROM tour");
    $getPreviewTour = $query->fetchAll();
    return $getPreviewTour;
}