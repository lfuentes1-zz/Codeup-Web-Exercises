<?php

require 'db_config.php';

require 'db_connect.php';

echo $dbc->getAttribute(PDO::ATTR_CONNECTION_STATUS) . "\n";


//This the file that renders to the browser
//Contains HTML, CSS, PHP, and now mySQL