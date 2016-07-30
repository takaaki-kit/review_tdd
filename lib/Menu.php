<?php

class Menu
{
    public function __construct($out, $in)
    {
        $this->out = $out;
        $this->in = $in;
    }
    public function select($mode)
    {
        $this->out->puts('Fizz');
    #    if($mode == '1'){
    #        //標準入力受け付け
    #        print((new FizzBuzz())->start(/*受け付けた値*/)));
    #    }
    }
}
