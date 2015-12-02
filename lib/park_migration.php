<?php

//Can be done in a separate file and will have to fopen file and read contents into a string
//Create a new database called parks_db.
//Create a new user called parks_user.
//Grant that user full control over the parks_db.

//run from mac
//ansible-playbook ansible/playbooks/vagrant/mysql/database.yml

require 'park_db_config.php';
require 'db_connect.php';

echo $dbc->getAttribute(PDO::ATTR_CONNECTION_STATUS) . "\n";

$deleteTable = 'DROP TABLE IF EXISTS national_parks';

$dbc->exec($deleteTable);

$createTable = 'CREATE TABLE national_parks (
    id INT UNSIGNED NOT NULL AUTO_INCREMENT,
    name VARCHAR(100) NOT NULL,
    location VARCHAR(50) NOT NULL,
    date_established DATE DEFAULT NULL,
    area_in_acres DOUBLE,
    -- area_in_acres FLOAT(10,2),
    PRIMARY KEY (id)
)';

$dbc->exec($createTable);