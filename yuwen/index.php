<?php

$lsFile = array();
// fill array
$d=dir(".");
while(false !== ($e = $d->read())) {
    array_push($lsFile, $e);
}
$d->close();
//
function echolink($e){
	echo "<a href=$e target=_blank >$e</a>"."<br>";
}
//
function titlefilter($e){
	return ! in_array($e, array(".", ".."));
}
//
$lsFile = array_filter($lsFile, "titlefilter");
array_map("echolink", $lsFile);

?>