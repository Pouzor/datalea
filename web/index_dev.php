<?php

// restrict dev bootstrap access
if (!in_array(@$_SERVER['REMOTE_ADDR'], array(
    '127.0.0.1',
    '::1',
    '109.190.4.222', //Spyrit office
))) {
    die('You are not allowed to access this file. Check ' . basename(__FILE__) . ' for more information.');
}

define('DS', DIRECTORY_SEPARATOR);
define('SILEX_ENV', 'dev');
define('SILEX_DEBUG', true);

include_once __DIR__.DS.'..'.DS.'app'.DS.'app.php';
