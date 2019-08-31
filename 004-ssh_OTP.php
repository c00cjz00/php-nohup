<?php
require __DIR__ . '/vendor/autoload.php';
use phpseclib\Net\SSH2;
$dirBin=dirname(__FILE__);
$cmd=trim($argv[1]); 
$serverIP="ln01.twcc.ai"; $serverAccount="c00cjz00"; $serverPassword="ponkar@54321";
$OPT=trim(shell_exec("php ".$dirBin."/007-keyOTP.php"));
$serverPassword_OTP=$serverPassword.$OPT;
$ssh = new SSH2($serverIP);
if (!$ssh->login($serverAccount, $serverPassword_OTP)) {
 exit('ssh connection failure');
}else{
 $resultSSH=$ssh->exec($cmd);  echo $resultSSH;
}
