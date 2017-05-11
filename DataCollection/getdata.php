<?php
$date=$_GET["date"];
$sleeptime=$_GET["sleeptime"];
$waketime=$_GET["waketime"];
$sleepplace=$_GET["sleepplace"];
$amq=$_GET["amq"];
$amplace=$_GET["amplace"];
$amnote=$_GET["amnote"];
$pmq=$_GET["pmq"];
$pmplace=$_GET["pmplace"];
$pmnote=$_GET["pmnote"];
$newdata = $date.", ".$sleeptime.", ".$waketime.", ".$sleepplace.", ".$amq.", ".$amplace.", ".$amnote.", ".$pmq.", ".$pmplace.", ".$pmnote."\n";
echo $newdata;
$datafile = fopen("/sleepdata.data", "a+");
fwrite($datafile,$newdata);
fclose($datafile);
?>