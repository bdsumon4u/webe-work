<?php

declare(strict_types=1);

const DATABASE_PATH = __DIR__.'/database.json';

session_start();

function get_database()
{
    return json_decode(file_get_contents(DATABASE_PATH), true);
}

function set_database($contents) {
    file_put_contents(DATABASE_PATH, json_encode($contents));
}

function get_table($tableName)
{
    $table = get_database()[$tableName] ?? [];

    if (isset($_GET['query'])) {
        $table = array_filter($table, function ($row) {
            return stripos($row['title'], $_GET['query']) !== false;
        });
    }

    return $table;
}