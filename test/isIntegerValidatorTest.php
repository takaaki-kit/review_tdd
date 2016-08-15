<?php

#負の数、少数、虚数、文字列、数字と文字列の組合せ

require_once('isIntegerValidator.php');

class isIntegerValidatorTest extends PHPUnit_Framework_TestCase{

    /**
     * @test
     */
    public function 正の整数であればtrueを返す()
    {
        $valid_input = 3;
        $this->assertTrue((new isIntegerValidator($valid_input))->isPositiveInteger());
    }

    /**
     * @test
     */
    public function 負の数すなわち正の数でなければfalseを返す()
    {
        $invalid_input = -3;
        $this->assertFalse((new isIntegerValidator($invalid_input))->isPositiveInteger());
    }

    /**
     * @test
     */
    public function 少数すなわち正の数でなければfalseを返す()
    {
        $invalid_input = 1.1;
        $this->assertFalse((new isIntegerValidator($invalid_input))->isPositiveInteger());
    }

    /**
     * @test
     */
    public function 文字列すなわち正の数でなければfalseを返す()
    {
        $invalid_input = 'abcdef';
        $this->assertFalse((new isIntegerValidator($invalid_input))->isPositiveInteger());
    }

    /**
     * @test
     */
    public function 数字と文字の複合すなわち正の数でなければfalseを返す()
    {
        $invalid_input = '1a2b3c';
        $this->assertFalse((new isIntegerValidator($invalid_input))->isPositiveInteger());
    }
}
