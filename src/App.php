<?php

namespace ShahradElahi\DurgerKing;

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
class App extends \TelegramBot\WebhookHandler
{

	public function __construct(string $api_key = '')
	{
		parent::__construct($api_key);
		self::setDebugMode(259760855);
	}

	/**
	 * This method is called when the bot receives a new message.
	 *
	 * @param Update $update
	 * @return void
	 */
	public function __process(Update $update): void
	{
		if ($update->getMessage()->getText() === '/ping') {
			Request::sendMessage([
				'chat_id' => $update->getMessage()->getChat()->getId(),
				'parse_mode' => 'Markdown',
				'text' => '`Pong!`',
			]);
		}

		self::loadPluginsWith([
			'Commands' => Plugins\Commands::class,
			'WebService' => Plugins\WebService::class,
		]);
	}

}