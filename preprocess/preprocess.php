<?php
	include_once 'laoma-raw-data-processer.php';;

	$preprocesser = new LaomaRawDataProcessor();
	$preprocesser->processRawData();
	echo "done";