<?php

class StdoutSpy
{
    private $buffer = [];

    public function puts($content)
    {
        $this->buffer[] = $content;
    }

    public function result()
    {
        return $this->buffer;
    }
}
