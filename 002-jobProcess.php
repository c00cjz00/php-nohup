<?php
require("vendor/autoload.php");
use dgr\nohup\Process;
$pid=trim($argv[1]);
$process = Process::loadFromPid($pid);  
$status = 0;
if ($process->isRunning()) $status = 1;
echo $status;