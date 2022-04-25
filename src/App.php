<?php

namespace VendorName\Example;

use TelegramBot\Entities\Update;
use TelegramBot\Request;

/**
 * Class App
 *
 * This class is the main class of the application.
 * It is responsible for handling the incoming updates and
 * sending the responses.
 *
 * @link https://core.telegram.org/bots/api#getting-updates
 */
class App extends \TelegramBot\Receiver
{

    /**
     * This method is called when the bot receives a new message.
     *
     * @param Update $update
     * @return void
     */
    public function __process(Update $update): void
    {
        self::addPlugin([
            'Hello' => Plugins\Hello::class,
        ]);

        if ($update->getMessage()->getText() === '/ping') {
            Request::sendMessage([
                'chat_id' => $update->getMessage()->getChat()->getId(),
                'parse_mode' => 'Markdown',
                'text' => '`Pong!`',
            ]);
        }

        self::match();
    }

}