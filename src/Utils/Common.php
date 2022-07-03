<?php

namespace ShahradElahi\DurgerKing\Utils;

/**
 * Class Common
 *
 * @author     Shahrad Elahi <shahrad@litehex.com>
 * @link       https://github.com/telegram-bot-php/durger-king
 * @version    v1.0.0
 */
class Common
{

	/**
	 * Convert json string to Pretty JSON
	 *
	 * @param string $json
	 * @return string
	 */
	public static function jsonToPretty(string $json): string
	{
		return json_encode(json_decode($json, true), JSON_PRETTY_PRINT);
	}

}