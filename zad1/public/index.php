<?php

declare(strict_types=1);

$root = dirname(__DIR__) . DIRECTORY_SEPARATOR;

define('APP_PATH', $root . 'app' . DIRECTORY_SEPARATOR);
define('FILES_PATH', $root . 'transaction_files' . DIRECTORY_SEPARATOR);
define('VIEWS_PATH', $root . 'view' . DIRECTORY_SEPARATOR);

require APP_PATH. 'app.php';

$phoneKeyboard = new PhoneKeyboardConverter();

require VIEWS_PATH . 'home.php';


//Ela nie ma kota
//echo $toNumeric->convertToNumeric('j,a,b,l,e,c,z,n,i,k');
//echo '<br/>';
//echo $toNumeric->convertToString('5,2,22,555,33,222,9999,66,444,55');