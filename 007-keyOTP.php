<?php
$dirBin=dirname(__FILE__); 
include_once($dirBin."/lib/GoogleAuthenticator.php"); 

## 台灣杉otp key ##
$otpKey = '6UPOOBOEYLAUZV5PRXM3ARFAI3TH573VZQXJ4R73VI4PFW6JMJZQ====';
$g = new GoogleAuthenticator();
$googleKey = $g->getCode($otpKey); 
echo $googleKey;


