<?php
//require("vendor/autoload.php");
require __DIR__ . '/vendor/autoload.php';
use phpseclib\Net\SFTP;
$filenameRemote = trim($argv[1]); 
$filenameLocal = trim($argv[2]);

$serverIP="atri.biobank.org.tw"; $serverAccount="ubuntu"; $serverPassword="most.gov";
//$serverIP="140.110.17.13"; $serverAccount="root"; $serverPassword="eji3u/6sl3";

$sftp = new SFTP($serverIP,22);
if (!$sftp->login($serverAccount, $serverPassword)) {
 exit('Login Failed');
}
$sftp->get($filenameRemote, $filenameLocal);


