<?php

require_once 'functions.php';
require_once 'models/Book.php';

if (! isset($_POST)) {
    header('Location dashboard.php');
}

$data = $_POST;
$isbn = $data['edit'];
unset($data['edit']);

if (empty($isbn)) {
    Book::create($data);

    $_SESSION['success'] = "Successfully stored book";
} else {
    $book = Book::find($isbn);
    $title = $book->getTitle();
    $book->update($data);

    $_SESSION['success'] = "Successfully updated '$title'";
}

header('Location: dashboard.php');