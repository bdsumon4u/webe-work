<?php

require_once 'functions.php';
require_once 'models/Book.php';

if (isset($_POST)) {
    $book = Book::find($_POST['isbn']);
    $title = $book->getTitle();
    $book->delete();

    $_SESSION['success'] = "Successfully deleted '$title'";

    header('Location: dashboard.php');
}