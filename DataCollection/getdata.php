<?php
$date=$_GET["date"];
$sleeptime=$_GET["sleeptime"];#time when you start sleep
$waketime=$_GET["waketime"];#time when you wake up
$sleepplace=$_GET["sleepplace"];#place where you sleep
$amc=$_GET["amc"];
$amq=$_GET["amq"];#quality in am
$amplace=$_GET["amplace"];#place in am
$amnote=$_GET["amnote"];#someting happen in am
$pmc=$_GET["pmc"];
$pmq=$_GET["pmq"];
$pmplace=$_GET["pmplace"];
$pmnote=$_GET["pmnote"];
$newdata = $date.", ".$sleeptime.", ".$waketime.", ".$sleepplace.", ".$amc.", ".$amq.", ".$amplace.", ".$amnote.", ".$pmc.", ".$pmq.", ".$pmplace.", ".$pmnote."\n";
echo $newdata;
$datafile = fopen("/sleepdata.data", "a+");# record data
fwrite($datafile,$newdata);
fclose($datafile);
?>