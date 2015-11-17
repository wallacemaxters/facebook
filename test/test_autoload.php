<?php

$directory =  dirname(__DIR__);

include_once $directory . '/vendor/autoload.php';

use WallaceMaxters\Facebook\PersistentData\Laravel3SessionPersistentData;

$sess = new Laravel3SessionPersistentData;

print_r($sess);