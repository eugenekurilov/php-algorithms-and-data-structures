<?php

// gap
//shrink factor

$data = [2,1,5,4,9,7,3,6,8];


function combSort(array &$data) {

	$shrink = 1.2;

	$gap = count($data)-1;

	while ($gap >= 1) {

		for ($i=0; $i<count($data); $i++) {
			if (isset($data[$i+$gap])) {
				if ($data[$i+$gap] < $data[$i]) {
					list ($data[$i], $data[$i+$gap]) = [$data[$i+$gap], $data[$i]];
				}
			}
		}

		$gap = $gap/$shrink;		
	}


	return $data;
}


function test(array $data) {

	$result = combSort($data);	

	if ($result == [1,2,3,4,5,6,7,8,9]) {
		echo PHP_EOL . ' ok  ' . PHP_EOL;
		print_r($result); 
	} else {
		echo PHP_EOL . ' failed  ' . PHP_EOL;
		print_r($result); 		
	}	
}


test($data);

