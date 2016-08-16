<?php

require_once('FizzBuzz.php');
require_once('Repository.php');
require_once('History.php');

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
            if((new isIntegerValidator($input))->isPositiveInteger()){
                $fizzbuzz = (new FizzBuzz($input))->start();
                $this->out->puts($fizzbuzz);
                $this->repository->register($input . ' ' . $fizzbuzz);
            }else{
                $this->out->puts('Error:invalid input at mode 1');
            }
        }else if($mode === 2){
            foreach($this->repository->all() as $history){
                $this->out->puts($history);
            }
        }else if($mode === 3){
            $history = new History();
            foreach($this->repository->all() as $content){
                $history->write($content);
            }
        }else{
            $this->out->puts('Error:invalid input');
        }
    }
}
