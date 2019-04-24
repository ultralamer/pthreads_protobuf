<?php

require './vendor/autoload.php';

$task = new class extends \Thread {
    public function run()
    {
    }
};

$task->start();

$cmd = new \TestProto\Msg();

echo 'successful'.PHP_EOL;
