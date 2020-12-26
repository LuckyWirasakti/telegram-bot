<?php 
include_once('vendor/autoload.php');

use Vendor\Bot;

class MainApp {

    public function __construct() {
        $this->run();
    }

    private function run()
    {
        Bot::handle();
    }
}

new MainApp();