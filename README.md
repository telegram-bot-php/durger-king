# Durger King
This project is based on the [@DurgerKing](https://t.me/DurgerKingBot), and it's about a bot that allows you to order food from restaurants.

You can try this bot at [@DurgerKingExampleBot](https://t.me/DurgerKingExampleBot).


### Installation

1. Clone the repository and install the dependencies.

```bash
git clone https://github.com/telegram-bot-php/durger-king.git
cd durger-king && composer install
```

2. Use `.env.example` as a template to create a `.env` file and fill it with your data.
  - `TELEGRAM_BOT_TOKEN` is the token of your bot, which you can get from [@BotFather](https://t.me/BotFather).
  - `ADMIN_CHAT_ID` is the chat id of the user that will receive the orders, which you can get from [@userinfobot](https://t.me/userinfobot).
  - `REMOTE_BASE_PATH` the base path of the project, which you can use your domain name or the IP address of the server.
  - `REMOTE_URI` if source code is not in the root of the domain, you can specify the path here.

3. Upload project to your server and set the with direct path to the `service.php` file.

4. Please make sure that webhook is set correctly.
   - Your webhook should be set to `https://<your-domain>/telegram`.

5. Enjoy! 🎉


### Links

- [Store WebPage](https://apps.litehex.com/durger-king/public/)
- [WebAppDemo](https://apps.litehex.com/durger-king/public/demo.php)
- [TelegramBot](https://t.me/DurgerKingExampleBot)

### License

This project is licensed under the MIT License - see the [LICENSE](LICENSE) file for details.