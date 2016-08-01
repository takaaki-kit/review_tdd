<?php

require_once('FizzBuzz.php');

class Menu
{
    public function __construct($out, $in)
    {
        $this->out = $out;
        $this->in = $in;
    }

    public function select($mode)
    {
        if($mode === 1){
            $fizzbuzz = (new FizzBuzz($this->in->get()))->start();
            $this->out->puts($fizzbuzz);
            $repository->register($fizzbuzz);
        }else{
            $this->out->puts('3 Fizz');
        }
    }
}
