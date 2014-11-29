<?php

require_once __DIR__.'/../src/WordCount.php';

class WordCountTest extends PHPUnit_Framework_TestCase
{
    /**
     * @test
     */
    public function onlyOneWord()
    {
        $this->assertEquals(1, WordCount::countWordsIn('alma'));
    }

//    /**
//     * @test
//     */
//    public function twoWords()
//    {
//        $this->assertEquals(2, WordCount::countWordsIn('alma korte'));
//    }

    /**
     * @test
     */
    public function emptyText()
    {
        $this->assertEquals(0, WordCount::countWordsIn(''));
    }

    /**
     * @test
     */
    public function onlyWhitespace()
    {
        $this->assertEquals(0, WordCount::countWordsIn("\r\n\t "));
    }
}
