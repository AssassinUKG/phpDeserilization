<?php

class App
{
    public $logfile = 'logs.txt';
    public $logData = 'text';
}

$test = new App;

echo serialize($test);

