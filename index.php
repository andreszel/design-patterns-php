<?php

// Autoload files using the Composer autoloader.
require_once __DIR__ . '/vendor/autoload.php';

use App\Example\HelloWorld;
use App\Helper\ConstHelper;

$entry = new HelloWorld();

// ------------------------------------------------------------------

echo ConstHelper::NEW_LINE;

echo ConstHelper::START_ROW_STRING . 'TEST EXAMPLE CLASS';
echo ConstHelper::NEW_LINE;

echo ($entry->printHelloWorld());
echo ConstHelper::SEPARATOR;
echo ConstHelper::NEW_LINE;

// ------------------------------------------------------------------

echo ConstHelper::NEW_LINE;
echo ConstHelper::START_ROW_STRING . 'TEST DESIGN PATTERNS';

echo ConstHelper::SEPARATOR;
echo ConstHelper::NEW_LINE;