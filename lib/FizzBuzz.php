<?php

class FizzBuzz{

    public function __construct($number)
    {
        $this->number = $number;
    }

    public function start()
    {
        if($this->number === 3){
            return 'Fizz';
        }

        if($this->number === 5){
            return 'Buzz';
        }

        if($this->number === 15){
            return 'FizzBuzz';
        }
        return '1';
    }
}
