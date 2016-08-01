<?php

require_once('FizzBuzzTest.php');

class FizzBuzzTest extends PHPUnit_Framework_TestCase{

    /**
     * @test
     */
    public function ３の倍数の時にFizzを返す()
    {
       $this->assertEquals((new FizzBuzz(3))->start(), 'Fizz');
    }

    /**
     * @test
     */
    public function ５の倍数の時にFizzを返す()
    {
       $this->assertEquals((new FizzBuzz(5))->start(), 'Buzz');
    }
}
