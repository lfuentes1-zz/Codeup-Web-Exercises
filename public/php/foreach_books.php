<?php

$books = array(
    'The Hobbit' => array(
        'published' => 1937,
        'author' => 'J. R. R. Tolkien',
        'pages' => 310
    ),
    'Game of Thrones' => array(
        'published' => 1996,
        'author' => 'George R. R. Martin',
        'pages' => 835
    ),
    'The Catcher in the Rye' => array(
        'published' => 1951,
        'author' => 'J. D. Salinger',
        'pages' => 220
    ),
    'A Tale of Two Cities' => array(
        'published' => 1859,
        'author' => 'Charles Dickens',
        'pages' => 544
    )
);

foreach ($books as $book => $book_details) {
    //The following foreach loop is not necessary
    // foreach ($book_details as $key => $value) {
    // }
    if ($book_details['published'] > 1950) {
            echo "Published before 1950!" . PHP_EOL;
    }
    echo "Book Title: {$book}" . PHP_EOL;
    echo "Year Published: {$book_details['published']}" . PHP_EOL;
    echo "Number of Pages: {$book_details['pages']}" . PHP_EOL;
    echo "Author: {$book_details['author']}" . PHP_EOL . PHP_EOL;;
}