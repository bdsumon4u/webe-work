<?php

require_once 'functions.php';

if (isset($_POST)) {
    $index = $_POST['index'];
    $database = get_database();

    $table = $database['books'] ?? [];
    $title = $table[$index]['title'];
    unset($table[$index]);

    $database['books'] = array_values($table);

    set_database($database);

    $_SESSION['success'] = "Successfully deleted '$title'";

    header('Location: dashboard.php');
}