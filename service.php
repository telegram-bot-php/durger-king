<?php
require_once __DIR__ . '/vendor/autoload.php';

ini_set('display_errors', '1');
error_reporting(E_ALL);

(new \ShahradElahi\DurgerKing\App())->resolve();

if (file_get_contents('php://input') == '') {
    die('<h1>Bot is working...</h1>');
}