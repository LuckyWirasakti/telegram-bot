<?php

namespace Vendor;

use Vendor\BoyerMoore;
use Vendor\Client;

class Bot {

    const CLIENT_URL = "https://gab00t.herokuapp.com/api/v1/message.json";
    const BOT_TOKEN = "1254629289:AAGSA0RKTjEl-s8Mks98MfXi7SMPgTxdnfg";
    const API_URL = "https://api.telegram.org/bot";
    
    private static $message = "Maaf, kami tidak menemukan jawaban yang cocok untuk pertanyaan anda!";
    
    public static function handle()
    {
        $text = self::getText();
        foreach (Client::handle(self::CLIENT_URL) as $pattern){
            if(BoyerMoore::handle($text[1], $pattern['kata_kunci'])) {
                self::setMessage($pattern['jawaban']);
            }
        }
        return self::sendMessage($text[0], self::getMessage());
    }

    private static function getText()
    {
        $update = json_decode(file_get_contents('php://input'), true);
        $chatId = $update['message']['chat']['id'];
        $message = strtolower($update["message"]["text"]);

        return [$chatId, $message];
    }

    private static function setMessage($message)
    {
        return self::$message = $message;
    }
    private static function getMessage()
    {
        return empty(self::$message)?"Maaf, kami tidak menemukan jawaban yang cocok untuk pertanyaan anda!": self::$message;
    }

    private static function sendMessage($chatId, $message)
    {
        return file_get_contents(self::API_URL.self::BOT_TOKEN."/sendmessage?chat_id=".$chatId."&text=".urldecode($message));
    }
}