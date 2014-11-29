<?php

class WordCount
{
    public static function countWordsIn($text) {
        if (!isset($text{0})) {
            return 0;
        }

        $wordCount = 0;
        $i = 0;
        $isPreviousLetterWhiteSpace = true;
        do {
            $isWhiteSpace = self::isWhiteSpace($text, $i);

            if ($isPreviousLetterWhiteSpace && !$isWhiteSpace) {
                $wordCount++;
            }

            $isPreviousLetterWhiteSpace = $isWhiteSpace;
            $i++;
        } while ($i < strlen($text));
        
        return $wordCount;
    }

    private static function isWhiteSpace($text, $i)
    {
        return $text{$i} == "\n"
            || $text{$i} == "\r"
            || $text{$i} == "\t"
            || $text{$i} == " ";
    }
}
