<?php

class cthStatic
{
    public static $test = 1;

    public static function hallo()
    {
        return "Hallo " . self::$test++ . " - kali <br>";
    }
}

echo cthStatic::$test;
echo "<br>";
echo cthStatic::hallo();
echo cthStatic::hallo();
echo cthStatic::hallo();
echo cthStatic::hallo();
