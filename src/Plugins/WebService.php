<?php

namespace ShahradElahi\DurgerKing\Plugins;

use ShahradElahi\DurgerKing\Utils\Common;
use TelegramBot\Entities\Update;
use TelegramBot\Interfaces\ParseMode;
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
	 * @param Update $update
	 * @return \Generator
	 */
	protected function onWebData(Update $update): \Generator
	{
		if ($update->getWebData()->getRawData()['method'] == "makeOrder") {
			yield Request::sendMessage([
				'chat_id' => $update->getWebData()->getRawData()['user']['id'],
				'parse_mode' => ParseMode::MARKDOWN,
				'text' => "Your order has been placed successfully! 🍟" . "\n\n" .
					"Your order is: \n`" . Common::jsonToPretty($update->getWebData()->getRawData()['order_data']) . "`"
			]);
		}
	}

}