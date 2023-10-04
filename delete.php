<?php

require_once 'functions.php';

if (isset($_POST)) {
    $index = $_POST['index'];
    $database = get_database();
    $tableName = $_POST['table'];

    $table = $database[$tableName] ?? [];
    $title = $table[$index]['title'];
    unset($table[$index]);

    $database[$tableName] = array_values($table);

    set_database($database);

    $_SESSION['success'] = "Successfully deleted '$title'";

    header('Location: dashboard.php');
}