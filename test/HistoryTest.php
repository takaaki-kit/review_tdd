<?php

require_once('History.php');

class HistoryTest extends PHPUnit_Framework_TestCase
{
    public function setUp()
    {
        if(file_exists('logs/data.txt')){
            unlink('logs/data.txt');
        }
    }

    public function tearDown()
    {
        if(file_exists('logs/data.txt')){
            unlink('logs/data.txt');
        }
    }

    /**
     * @test
     */
    public function データをすべて返す()
    {
        $history = new History();
        $history->write('3 Fizz');
        $history->write('5 Buzz');
        $history->write('15 FizzBuzz');
        $this->assertEquals(['3 Fizz', '5 Buzz', '15 FizzBuzz'], (new History())->read());
    }

    /**
     * @test
     */
    #public function データを書き込めること()
    #{
    #    (new History())->write();
    #}
}
