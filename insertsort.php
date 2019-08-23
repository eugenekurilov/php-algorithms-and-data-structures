<?php

$data = [2,4,1,7,9];

function insertSort(array &$data) {

	foreach ($data as $key => $value) {
		
		$top = $key;

		while ($top > 0 && $data[$top] < $data[$top-1]) {
			list($data[$top-1], $data[$top]) = [$data[$top], $data[$top-1]];
			$top -= 1;			
		}

	}
	
	return $data;
}


function test(array $data) {
	if (insertSort($data) == [1,2,4,7,9]) {
		echo PHP_EOL . ' ok ' . PHP_EOL;
		print_r($data);
	} else {
		echo PHP_EOL . ' faild ' . PHP_EOL;
		print_r($data);

	}
}

test($data);