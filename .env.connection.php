<?php

$dotenv = new Dotenv\Dotenv(__DIR__);
$dotenv->load();

return [
    'DB_NAME'       => getenv('DB_NAME'),
    'DB_USER'       => getenv('DB_USER'),
    'DB_PASSWORD'   => getenv('DB_PASSWORD'),
    'DB_HOST'       => getenv('DB_HOST'),
    'WP_HOME'       => getenv('WP_HOME'),
    'WP_SITEURL'    => getenv('WP_SITEURL')
];