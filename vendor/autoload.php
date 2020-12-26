<?php
spl_autoload_register(function ($autoload) {
    include_once(str_replace('Vendor\\','',$autoload).".php");
});