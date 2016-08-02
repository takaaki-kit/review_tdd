<?php

require_once('Repository.php');

class RepositoryTest extends PHPUnit_Framework_TestCase{

    /**
     * @test
     */
    public function データを複数保存出来ること()
    {
        $repository = new Repository();
        $repository->register('3 Fizz');
        $repository->register('5 Buzz');
        $this->assertEquals(['3 Fizz', '5 Buzz'], $repository->all());
    }

    /**
     * @test
     */
    public function データを保存出来ること()
    {
        $repository = new Repository();
        $repository->register('15 FizzBuzz');
        $this->assertEquals(['15 FizzBuzz'], $repository->all());
    }
}
