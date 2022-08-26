<?php

namespace ShahradElahi\DurgerKing\Plugins;

use ShahradElahi\DurgerKing\Utils\Common;
use TelegramBot\Entities\WebAppData;
use TelegramBot\Enums\ParseMode;
use TelegramBot\Request;

/**
 * Class WebService
 *
 * The Class will handle the requests for the WebApp.
 *
 * @author     Shahrad Elahi <shahrad@litehex.com>
 * @link       https://github.com/telegram-bot-php/durger-king
 * @version    v1.0.0
 */
class WebService extends \TelegramBot\Plugin
{

    /**
     * @param int $update_id
     * @param WebAppData $webAppData
     * @return \Generator
     */
    public function onWebAppData(int $update_id, WebAppData $webAppData): \Generator
    {
        if ($webAppData->getRawData()['method'] == "makeOrder") {
            yield Request::sendMessage([
                'chat_id' => $webAppData->getRawData()['user']['id'],
                'parse_mode' => ParseMode::MARKDOWN,
                'text' => "Your order has been placed successfully! 🍟" . "\n\n" .
                    "Your order is: \n`" . Common::jsonToPretty($webAppData->getRawData()['order_data']) . "`"
            ]);
        }
    }

}