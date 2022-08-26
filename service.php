<?php
require_once __DIR__ . '/vendor/autoload.php';
\TelegramBot\CrashPad::setDebugMode(259760855);
(new \ShahradElahi\DurgerKing\App())->resolve();
echo '<h1>Bot is working...</h1>';