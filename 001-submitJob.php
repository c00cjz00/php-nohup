<?php
require("vendor/autoload.php");
use dgr\nohup\Nohup;
$cmd = "sleep 120";
$process = Nohup::run($cmd);
$pid = $process->getPid();
echo $pid;