<?php

require_once('FizzBuzz.php');
require_once('Repository.php');

class Menu
{
    public function __construct($out, $in, $repository)
    {
        $this->out = $out;
        $this->in = $in;
        $this->repository = $repository;
    }

    public function select($mode)
    {
        if($mode === 1){
            $input = $this->in->get();
            $fizzbuzz = (new FizzBuzz($input))->start();
            $this->out->puts($fizzbuzz);
            $this->repository->register($input . ' ' . $fizzbuzz);
        }else if($mode === 2){
            foreach($this->repository->all() as $history){
                $this->out->puts($history);
            }
        }else{
            $this->out->puts('Error:invalid input');
        }
    }
}
