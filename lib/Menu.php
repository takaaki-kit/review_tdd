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
        $this->history = new History();
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
            foreach($this->repository->all() as $content){
                $this->history->write($content);
            }
        }else if($mode === 4){
            foreach($this->history->read() as $content){
                $this->out->puts($content);
            }
        }else{
            $this->out->puts('Error:invalid input');
        }
    }
}
