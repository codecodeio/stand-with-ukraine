<?php
namespace Codecodeio\StandWithUkraine;

class StandWithUkraine
{
    public static function showMessage()
    {
        // Ukrainian flag: blue (top), yellow (bottom)
    $flagWidth = 22; // Adjust width to match text length
    $blue = "\e[44m" . str_repeat(' ', $flagWidth) . "\e[0m"; // Blue background
    $yellow = "\e[43m" . str_repeat(' ', $flagWidth) . "\e[0m"; // Yellow background
    echo PHP_EOL;
    for ($i = 0; $i < 2; $i++) echo $blue . PHP_EOL;
    for ($i = 0; $i < 2; $i++) echo $yellow . PHP_EOL;
    echo PHP_EOL . "Stand With Ukraine \xf0\x9f\x87\xba\xf0\x9f\x87\xa6" . PHP_EOL . PHP_EOL;
    }
}
