<?php

require_once('isIntegerValidator.php');

class isIntegerValidatorTest extends PHPUnit_Framework_TestCase{

    /**
     * @test
     */
    public function 正の整数であれば真trueを返す()
    {
        $valid_input = 3;
        $this->assertTrue((new isIntegerValidator($valid_input))->isPositiveInteger());
    }

    /**
     * @test
     */
    public function 正の整数でなければfalseを返す()
    {
        $valid_input = -3;
        $this->assertFalse((new isIntegerValidator($valid_input))->isPositiveInteger());
    }
}
