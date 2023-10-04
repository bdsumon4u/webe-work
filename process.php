<?php

require_once 'functions.php';

if (! isset($_POST)) {
    header('Location dashboard.php');
}

$data = $_POST;
$index = $data['edit'];
$tableName = $data['table'];
unset($data['table'], $data['edit']);

$database = get_database();

$table = $database[$tableName] ?? [];

if (is_null($index)) {
    $table[] = $data;

    $_SESSION['success'] = "Successfully stored book";
} else {
    $title = $table[$index]['title'];
    $table[$index] = $data;

    $_SESSION['success'] = "Successfully updated '$title'";
}

$database[$tableName] = array_values($table);

set_database($database);

header('Location: dashboard.php');