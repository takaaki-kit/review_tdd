<?php

class StdoutSpy
{
    public function __construct()
    {
        $this->buffer;
    }

    public function puts($content)
    {
        $this->buffer = $content;
    }

    public function result()
    {
        return $this->buffer;
    }
}
