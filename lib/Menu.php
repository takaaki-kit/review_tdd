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
            $fizzbuzz = (new FizzBuzz($this->in->get()))->start();
            $this->out->puts($fizzbuzz);
            $this->repository->register($fizzbuzz);
        }else{
            foreach($this->repository->all() as $history){
                $this->out->puts($history);
            }
        }
    }
}
