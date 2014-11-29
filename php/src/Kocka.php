<?php

class Kocka
{
    public static function rateDiceCast($number) {
        switch ($number) {
            case 6:  $result = 'kiraly'; break;
            case 5:  $result = 'kituno'; break;
            case 4:  $result = 'jo';     break;
            case 3:
            case 2:
            case 1:  $result = 'gyenge'; break;
            default: $result = null; break;
        }
        return $result;
    }
}
