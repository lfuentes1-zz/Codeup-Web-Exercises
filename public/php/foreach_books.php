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

foreach ($books as $title => $novel) {
    //The following foreach loop is not necessary
    // foreach ($novel as $key => $value) {
    // }
    if ($novel['published'] > 1950) {
            echo "Published before 1950!" . PHP_EOL;
    }
    echo "Book Title: {$title}" . PHP_EOL;
    echo "Year Published: {$novel['published']}" . PHP_EOL;
    echo "Number of Pages: {$novel['pages']}" . PHP_EOL;
    echo "Author: {$novel['author']}" . PHP_EOL . PHP_EOL;;
}

//Another solution
//For this problem, these nested loops do not provide much control.  If there was more
// keys, they would print also even though we wouldn't want them to.  Also, keys print in order.
foreach ($books as $title => $novel) {
    echo "{$title} " .PHP_EOL;
    foreach ($novel as $key => $data) {
        echo "{$key}: {$data}" . PHP_EOL;
    }
    echo PHP_EOL;
}