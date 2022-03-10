<?php


class Dev
{
    public static function _log($txt)
    {
        $file = 'log.txt';
        $person = "$txt\n";
        file_put_contents($file, $person, FILE_APPEND | LOCK_EX);
    }
}
