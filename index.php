<?php 
include_once('vendor/autoload.php');

use Vendor\Bot;

class MainApp {

    public function __construct() {
        $this->run();
    }

    private function run()
    {
        echo "Bot is running on: https://gab00t.herokuapp.com:80</br>";
        echo "Crafted by <a href='https://luckywirasakti.github.io'>Lucky Wirasakti</a>";
        Bot::handle();
    }
}

new MainApp();