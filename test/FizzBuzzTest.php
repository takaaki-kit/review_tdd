<?php

require_once('FizzBuzzTest.php');

class FizzBuzzTest extends PHPUnit_Framework_TestCase{

    /**
     * @test
     */
    public function ３の倍数の時にFizzを返す()
    {
       $this->assertEquals((new FizzBuzz(3))->start(), 'Fizz');
       $this->assertEquals((new FizzBuzz(6))->start(), 'Fizz');
    }

    /**
     * @test
     */
    public function ５の倍数の時にFizzを返す()
    {
       $this->assertEquals((new FizzBuzz(5))->start(), 'Buzz');
       $this->assertEquals((new FizzBuzz(10))->start(), 'Buzz');
    }

    /**
     * @test
     */
    public function １５の倍数の時にFizzBuzzを返す()
    {
       $this->assertEquals((new FizzBuzz(15))->start(), 'FizzBuzz');
       $this->assertEquals((new FizzBuzz(30))->start(), 'FizzBuzz');
    }

    /**
     * @test
     */
    public function いずれの倍数でもない時にその数字を返す()
    {
       $this->assertEquals((new FizzBuzz(1))->start(), '1');
       $this->assertEquals((new FizzBuzz(2))->start(), '2');
    }

    /**
     * @test
     */
    public function すべての倍数の時にその数字を返す()
    {
       $this->assertEquals((new FizzBuzz(0))->start(), '0');
    }
}
