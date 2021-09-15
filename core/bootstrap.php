<?php

$config = require 'config.php';

require 'core/router.php';

require 'core/database/connection.php';

require 'core/databse/QueryBuilder.php';



$query = new QueryBuilder(
    
    Connection::make($config['database'])
);

