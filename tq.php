<?php
$ip=$_SERVER['REMOTE_ADDR'];
$ip1 = getenv('HTTP_X_FORWARDED_FOR');
if (($ip1 != "") && ($ip1 != "unknown")) $ip=$ip1;

echo $ip;