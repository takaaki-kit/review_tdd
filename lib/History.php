<?php

class History
{
    public function read()
    {
        $body = [];
        $fp = fopen('logs/data.txt', 'r');
        while($line = fgets($fp)){
            $body[] = rtrim($line);
        }
        fclose($fp);
        return $body;
    }

    public function write($content)
    {
        $fp = fopen('logs/data.txt', 'a');
        fwrite($fp, $content . "\n");
        fclose($fp);

    }
}
