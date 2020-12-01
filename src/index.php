<?php
require_once __DIR__ . '/databases/db_connect.php';
require_once __DIR__ . '/databases/db_select.php';
require_once __DIR__ . '/lib/escape.php';

$link = db_connect();
$logs = db_select($link);

include 'views/index_view.php';
