<?php

class Repository{

    private $buffer = [];

    public function register($fizzbuzz_result){
        $this->buffer[] = $fizzbuzz_result;
    }

    public function all(){
        return $this->buffer;
    }
}
