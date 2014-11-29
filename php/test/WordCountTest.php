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

    /**
     * @test
     */
    public function oneWordWithWhiteSpaceBeforeIt()
    {
        $this->assertEquals(1, WordCount::countWordsIn(' alma'));
    }


    /**
     * @test
     */
    public function oneWordWithWhiteSpaceAfterIt()
    {
        $this->assertEquals(1, WordCount::countWordsIn('alma '));
    }

    /**
     * @test
     */
    public function twoWords()
    {
        $this->assertEquals(2, WordCount::countWordsIn('alma korte'));
    }


    /**
     * @test
     */
    public function negysoros()
    {
        $negysoros = 'Négysoros

            Alvó szegek a jéghideg homokban.
            Plakátmagányban ázó éjjelek.
            Égve hagytad a folyosón a villanyt.
            Ma ontják véremet.
            ';

        $this->assertEquals(18, WordCount::countWordsIn($negysoros));
    }

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
