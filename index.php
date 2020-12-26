<?php 
include_once('vendor/autoload.php');

use Vendor\Bot;

class MainApp {

    public function __construct() {
        $this->run();
    }

    private function run()
    {
        echo "Bot is running on: https://gab00t.herokuapp.com:80";
        Bot::handle();
    }
}

new MainApp();