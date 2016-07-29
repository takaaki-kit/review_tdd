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
        $this->assertEquals('Fizz', $spy->result());
    }
}
