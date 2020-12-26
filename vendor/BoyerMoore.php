<?php

namespace Vendor;

class BoyerMoore {

    private static function makeCharTable(string $pattern)
    {
        $len = strlen($pattern);
        $table = array();
        
        for ($i = 0; $i < $len; $i++) {
            $table[$pattern[$i]] = $len - $i - 1;
        }

        return $table;
    }

    private static function search(string $text,string $pattern)
    {
        $patlen = strlen($pattern);
        $textlen = strlen($text);
        
        $table = self::makeCharTable($pattern);

        for ($i = $patlen - 1; $i < $textlen;) {
            $t = $i;

            for ($j = $patlen - 1; $pattern[$j] == $text[$i]; $j--, $i--) {
                if ($j == 0)
                    return $i;
            }
            $i = $t;

            if (array_key_exists($text[$i], $table)) {
                $i = $i + max($table[$text[$i]], 1);
            } else {
                $i += $patlen;
            }
        }
        return -1;
    }

    public static function handle(string $text,string $pattern)
    {
        return self::search($text, $pattern) == -1 ? false : true;
    }
}