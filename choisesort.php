<?php

$data = [2, 5, 1, 7, 6];

function choiseSort(array &$data) {

	$count =  count($data);

	for ($i=0; $i<$count-1; $i++) {
		for ($j=$i; $j<$count; $j++) {
			if ($data[$j] < $data[$i]) {
				list($data[$i], $data[$j]) = [$data[$j], $data[$i]];
			}
		}
	}

	return $data;
}

function test(array $data) {
	if (choiseSort($data) == [1,2,5,6,7]) {
		echo PHP_EOL. ' ok ' . PHP_EOL;
		print_r($data);
	} else {
		echo PHP_EOL. ' failed ' . PHP_EOL;
		print_r($data);		
	}
}

test($data);