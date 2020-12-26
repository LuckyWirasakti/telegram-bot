<?php 
include_once('vendor/autoload.php');

use Vendor\Bot;

class MainApp {

    public function __construct() {
        $this->run();
    }

    private function run()
    {
        echo "<div style='margin-top:350px;'>
                <center>Bot is running on: https://gab00t.herokuapp.com:80</br></br>
                    Crafted by <a href='https://luckywirasakti.github.io'>Lucky Wirasakti</a>
                </center>
            </div>";
        Bot::handle();
    }
}

new MainApp();