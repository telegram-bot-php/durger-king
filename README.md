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
  - `RESOURCE_BASE_URL` is the base url to the web app.

3. Upload project to your server and set the with direct path to the `server.php` file.

4. Please make sure that webhook is set correctly.

5. Enjoy! 🎉