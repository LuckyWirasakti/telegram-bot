<?php

namespace Vendor;

class Client {

    public static function handle(string $url)
    {
        return json_decode(file_get_contents($url), true);
    }
}