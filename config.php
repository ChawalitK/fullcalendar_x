<?php
require('vendor/autoload.php');

use Dcblogdev\PdoWrapper\Database;

$options = [
    'host' => "localhost",
    'database' => "test",
    'username' => "root",
    'password' => "1qazxsw2"
];
$db = new Database($options);

$dir = "./";
