<?php
//	$runMode = "PROD";
//  $runMode = "PRE";
	$runMode = "DEV";
	$siteRoot = ".";

	if ($runMode == "DEV") {
		$siteRoot = "http://192.168.42.97/margerywarder.com";
	} else if ($runMode == "PRE") {
		$siteRoot = "http://www.jdacsolutions.com/clients/mkw";
	} else {
		$siteRoot = "http://www.margerywarder.com";
	}
?>

 