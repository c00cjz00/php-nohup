<?php
//require("vendor/autoload.php");
require __DIR__ . '/vendor/autoload.php';
use phpseclib\Net\SSH2;
$cmd=trim($argv[1]); 
$serverIP="atri.biobank.org.tw"; $serverAccount="ubuntu"; $serverPassword="most.gov";
$ssh = new SSH2($serverIP);
if (!$ssh->login($serverAccount, $serverPassword)) {
 exit('ssh connection failure');
}else{
 $resultSSH=$ssh->exec($cmd);  echo $resultSSH;
}
