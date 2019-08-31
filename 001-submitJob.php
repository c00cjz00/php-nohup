<?php
require("vendor/autoload.php");
use dgr\nohup\Nohup;
$cmd=trim($argv[1]); $outputFile = NULL; $errorFile = NULL;
if (isset($argv[2])) $outputFile = trim($argv[2]);
if (isset($argv[3])) $errorFile = trim($argv[3]);
$process = Nohup::run($cmd,$outputFile,$errorFile);
$pid = $process->getPid();
echo $pid;