<?php

require_once('Menu.php');
require_once('StdoutSpy.php');
require_once('StdinStub.php');


class MenuTest extends PHPUnit_Framework_TestCase
{
    /**
     * @test
     */
    public function １が入力されたらFizzBuzzの結果を返す()
    {
        $spy = new StdoutSpy();
        $stub = new StdinStub(3);
        $menu = new Menu($spy, $stub);
        $menu->select(1);
        $this->assertEquals(['Fizz'], $spy->result());
    }

    /**
     * @test
     */
    public function ２が入力されたらfizzbuzzの履歴を返す()
    {
        $spy = new StdoutSpy();
        $stub = new StdinStub(3);
        $menu = new Menu($spy, $stub);
        $menu->select(1);
        $menu->select(1);
        $menu->select(2);
        $this->assertEquals(['3 Fizz', '3 Fizz'], $spy->result());
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
