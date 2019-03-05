<?php

function db_connect() {
    static $db;

    if ($db === null) {
        $db = new PDO(DSN, DB_USERNAME, DB_PASSWORD);
        $db->exec('SET NAMES UTF8');
    }

    return $db;
}

function db_query($sql, $params = []) {
    $db = db_connect();
    $query = $db->prepare($sql);
    $query->execute($params);

    db_checkerror($query);
    return $query;
}

function db_checkerror($query) {
    $info = $query->errorInfo();

    if ($info[0] != PDO::ERR_NONE) {
        exit($info[2]);
    }
}
