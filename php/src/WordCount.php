<?php

class WordCount
{
    public function countWordsIn($text) {
        if (!isset($text{0})) {
            return 0;
        }

        $wordCount = 0;
        $i = 0;
        do {
            $isWhiteSpace = 
                    $text{$i} == "\n" || 
                    $text{$i} == "\r" || 
                    $text{$i} == "\t" || 
                    $text{$i} == " ";

            if (!$isWhiteSpace) {
                $wordCount = 1;
            }

            $i++;
        } while ($i < strlen($text));
        
        return $wordCount;
    }
}
