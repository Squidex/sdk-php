<?php

use Test\HelloWorld\Index;

require_once __DIR__ .'/../vendor/autoload.php';

$greeting = new Index();

echo $greeting->greet("Hello Composer");

