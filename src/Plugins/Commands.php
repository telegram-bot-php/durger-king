<?php

namespace ShahradElahi\DurgerKing\Plugins;

use TelegramBot\Entities\InlineKeyboard;
use TelegramBot\Entities\InlineKeyboardButton;
use TelegramBot\Entities\Message;
use TelegramBot\Enums\ParseMode;
use TelegramBot\Request;

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

    /**
     * @param int $update_id
     * @param Message $message
     * @return \Generator
     */
    public function onMessage(int $update_id, Message $message): \Generator
    {
        if ($message->getText() == '/start') {
            yield Request::sendMessage([
                'chat_id' => $message->getChat()->getId(),
                'parse_mode' => ParseMode::MARKDOWN,
                'text' => "*Let's get started* 🍟 \n\nPlease tap the button below to order your perfect lunch!",
                'reply_markup' => InlineKeyboard::make()->setKeyboard([
                    [
                        InlineKeyboardButton::make('Order Food')->setWebApp($_ENV['RESOURCE_BASE_URL']),
                    ]
                ])
            ]);
        }

        if ($message->getText() == '/test') {
            yield Request::sendMessage([
                'chat_id' => $message->getChat()->getId(),
                'parse_mode' => ParseMode::MARKDOWN,
                'text' => "Please tap the button below to open the web app!",
                'reply_markup' => InlineKeyboard::make()->setKeyboard([
                    [
                        InlineKeyboardButton::make('Test')->setWebApp($_ENV['RESOURCE_BASE_URL'] . '/demo.php'),
                    ]
                ])
            ]);
        }

        if ($message->getText() == '/help') {
            yield Request::sendMessage([
                'chat_id' => $message->getChat()->getId(),
                'text' => "This is the help page. You can use the following commands:\n\n" .
                    "/start - Start the bot\n" .
                    "/order - Order a burger\n" .
                    "/help - Show this help page"
            ]);
        }
    }

}