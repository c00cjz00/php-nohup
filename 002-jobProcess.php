<?php
require("vendor/autoload.php");
use dgr\nohup\Process;
$pid=trim($argv[1]);
$process = Process::loadFromPid($pid);  

if ($process->isRunning()) {
    //$process->stop();
    echo 123;
}