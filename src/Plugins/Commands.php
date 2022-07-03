<?php

namespace ShahradElahi\DurgerKing\Plugins;

use TelegramBot\Entities\Update;
use TelegramBot\Interfaces\ParseMode;
use TelegramBot\Request;
use TelegramBot\Util\DotEnv;

/**
 * Class Commands
 *
 * The Class will handle the requests for the WebApp.
 *
 * @author     Shahrad Elahi <shahrad@litehex.com>
 * @link       https://github.com/telegram-bot-php/durger-king
 * @version    v1.0.0
 */
class Commands extends \TelegramBot\Plugin
{

    protected bool $kill_on_yield = true;

    /**
     * onPrivateChat
     *
     * @param Update $update
     * @return \Generator
     */
    protected function onReceivedUpdate(Update $update): \Generator
    {
        if ($update->getMessage()) {
            if ($update->getMessage()->getText() == '/start') {
                yield Request::sendMessage([
                    'chat_id' => $update->getMessage()->getChat()->getId(),
                    'parse_mode' => ParseMode::MARKDOWN,
                    'text' => "*Let's get started* 🍟 \n\nPlease tap the button below to order your perfect lunch!",
                    'reply_markup' => [
                        'inline_keyboard' => [
                            [
                                [
                                    'text' => 'Order Food',
                                    'web_app' => [
                                        'url' => DotEnv::get('RESOURCE_BASE_URL')
                                    ],
                                ],
                            ]
                        ]
                    ]
                ]);
            }

            if ($update->getMessage()->getText() == '/test') {
                yield Request::sendMessage([
                    'chat_id' => $update->getMessage()->getChat()->getId(),
                    'parse_mode' => ParseMode::MARKDOWN,
                    'text' => "Please tap the button below to open the web app!",
                    'reply_markup' => [
                        'inline_keyboard' => [
                            [
                                [
                                    'text' => 'Test',
                                    'web_app' => [
                                        'url' => DotEnv::get('RESOURCE_BASE_URL') . '/demo.html'
                                    ],
                                ],
                            ]
                        ]
                    ]
                ]);
            }

            if ($update->getMessage()->getText() == '/help') {
                yield Request::sendMessage([
                    'chat_id' => $update->getMessage()->getChat()->getId(),
                    'text' => "This is the help page. You can use the following commands:\n\n" .
                        "/start - Start the bot\n" .
                        "/order - Order a burger\n" .
                        "/help - Show this help page"
                ]);
            }
        }
    }

}