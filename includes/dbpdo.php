<?php

$user = 'root';
$pwd = '';
$dsn = 'mysql:host=localhost;dbname=court_case_management;charset=utf8';
$options = [
 PDO::ATTR_EMULATE_PREPARES => false, // turn off emulation mode for "real" prepared statements
 PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, //turn on errors in the form of exceptions
 PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC, //make the default fetch be an associative array
];

try {
 $conpdo = new PDO($dsn, $user, $pwd, $options);
} catch (Exception $e) {
 error_log($e->getMessage());
 exit('Error establishing connection using PDO');
}