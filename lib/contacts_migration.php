<?php

require 'contacts_db_config.php';
require 'db_connect.php';

//outputs successful connection
echo $dbc->getAttribute(PDO::ATTR_CONNECTION_STATUS) . "\n";

$deleteTable = 'DROP TABLE IF EXISTS contacts';

$dbc->exec($deleteTable);

$createTable = 'CREATE TABLE contacts (
    id INT UNSIGNED NOT NULL AUTO_INCREMENT,
    name VARCHAR(50) NOT NULL,
    email VARCHAR(50) NOT NULL UNIQUE,
    phone VARCHAR(15),
    address VARCHAR (50) NOT NULL,
    city VARCHAR (50) NOT NULL,
    state CHAR (2) NOT NULL,
    zip CHAR (5) NOT NULL,
    PRIMARY KEY (id)
)';

$dbc->exec($createTable);