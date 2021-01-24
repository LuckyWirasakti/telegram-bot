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
                <center>Bot is running on: https://vast-forest-76100.herokuapp.com</br></br>
                    Crafted by <a href='https://luckywirasakti.github.io'>Lucky Wirasakti</a>
                </center>
            </div>";
        Bot::handle();
    }
}

new MainApp();