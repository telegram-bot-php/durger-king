<?php

namespace VendorName\Example\Plugins;

use TelegramBot\Entities\Update;
use TelegramBot\Request;

/**
 * Hello Plugin
 *
 * This is an example plugin.
 *
 * @version 1.0.0
 */
class Hello extends \TelegramBot\Plugin
{

    /**
     * This property means that if __run() had some requests to the Telegram API,
     * it will kill the process and other plugins will not be executed.
     *
     * @var bool
     */
    protected bool $kill_on_finish = true;

    /**
     * @param Update $update
     * @return \Generator
     */
    public function __run(Update $update): \Generator
    {
        if ($update->getMessage()->getText() == '/hello') {
            yield Request::replyWithMessage([
                'text' => 'Hello World!'
            ]);
        }
    }

}