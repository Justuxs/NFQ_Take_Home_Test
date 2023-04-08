<?php

namespace App\Service;

class ReadingTimeCalculator
{
    private const minimum_length = 4;
    private const words_per_minute = 200;
    private const regex_text_to_words = '/[^a-zA-Z0-9]+/';
    public static function calculateReadingTime(?string $text): int
    {
        $words = preg_split(self::regex_text_to_words, $text, -1, PREG_SPLIT_NO_EMPTY);

        $accumuliator =0;
        foreach ($words as $word) {
            if(strlen($word) >= self::minimum_length){
                $accumuliator +=1;
            }
        }

        return round($accumuliator/self::words_per_minute);
    }
}