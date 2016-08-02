<?php

require_once('Menu.php');
require_once('StdoutSpy.php');
require_once('StdinStub.php');
require_once('Repository.php');


class MenuTest extends PHPUnit_Framework_TestCase
{
    /**
     * @test
     */
    public function １が入力されたらFizzBuzzの結果を返す()
    {
        $spy = new StdoutSpy();
        $stub = new StdinStub(3);
        $repository = new Repository;
        $menu = new Menu($spy, $stub, $repository);
        $menu->select(1);
        $this->assertEquals(['Fizz'], $spy->result());
    }

    /**
     * @test
     */
    public function １が入力されたらfizzbuzzの結果を保存する()
    {
        $spy = new StdoutSpy();
        $stub = new StdinStub(3);
        $repository = new Repository;
        $menu = new Menu($spy, $stub, $repository);
        $menu->select(1);
        $this->assertEquals(['3 Fizz'], $repository->all());
    }
    /**
     * @test
     */
    public function ２が入力されたらfizzbuzzの履歴を返す()
    {
        $spy = new StdoutSpy();
        $stub = new StdinStub(3);
        $repository = new Repository;
        $repository->register('3 Fizz');
        $repository->register('5 Buzz');
        $menu = new Menu($spy, $stub, $repository);
        $menu->select(2);
        $this->assertEquals(['3 Fizz', '5 Buzz'], $spy->result());
    }

    /**
     * @test
     */
    #public function ３が入力されたらfizzbuzzの履歴を保存する()
    #{
    #}

    /**
     * @test
     */
    #public function ４が入力されたら保存されたfizzbuzzの履歴を返す()
    #{
    #}

    /**
     * @test
     */
    #public function 無効な値が入力されたらエラーを返す()
    #{
    #}
}
