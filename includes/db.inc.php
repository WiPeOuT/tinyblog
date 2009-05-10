<?php

$dbInfo['host'] = 'localhost';
$dbInfo['user'] = 'root';
$dbInfo['pass'] = '';
$dbInfo['name'] = 'tutorial';

$db = new mysqli($dbInfo['host'], $dbInfo['user'], $dbInfo['pass'], $dbInfo['name']);
unset($dbInfo);

return $db;
?>