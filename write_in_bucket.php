<?php

$handle = fopen('gs://mjcstorage/data.txt','w');

fwrite($handle, "");
	$count = 0 ;
	$f1 = 0;
	$f2 = 1;
	echo $f1." , ";
	echo $f2." , ";
	$f3 = $f2 + $f1;
	fwrite($handle, "".$f3);

	while ($count < 10 ){
		
		$f3 = $f2 + $f1;
		fwrite($handle, ", ".$f3);
		$f1 = $f2 ;
		$f2 = $f3 ;
		$count = $count + 1;
	}

fclose($handle);
echo 'Fibonacci file created in GCS Bucket';
