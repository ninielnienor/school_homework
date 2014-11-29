<?php

require_once __DIR__.'/../src/Kocka.php';

class KockaTest extends PHPUnit_Framework_TestCase
{
    /**
     * @test
     */
    public function invalidThrowReturnsNull()
    {
        $this->assertNull(Kocka::rateDiceCast(8));
    }
    
    /**
     * @test
     */
    public function oneShouldBeAWeakThrow()
    {
        $this->assertEquals('gyenge', Kocka::rateDiceCast(1));
    }

    /**
     * @test
     */
    public function twoShouldBeAWeakThrow()
    {
        $this->assertEquals('gyenge', Kocka::rateDiceCast(2));
    }
    /**
     * @test
     */
    public function threeShouldBeAWeakThrow()
    {
        $this->assertEquals('gyenge', Kocka::rateDiceCast(3));
    }

    /**
     * @test
     */
    public function fourShouldBeAGoodThrow()
    {
        $this->assertEquals('jo', Kocka::rateDiceCast(4));
    }

    /**
     * @test
     */
    public function fiveShouldBeAnExceptionalThrow()
    {
        $this->assertEquals('kituno', Kocka::rateDiceCast(5));
    }

    /**
     * @test
     */
    public function sixShouldBeAnAwesomeThrow()
    {
        $this->assertEquals('kiraly', Kocka::rateDiceCast(6));
    }
}
