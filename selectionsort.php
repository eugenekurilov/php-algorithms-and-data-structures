<?php

$data = [2,1,4,3,6,5];



function selectionSort(array &$data) {

	for ($min=0; $min <= count($data)-1; $min++) {

		$lastMin = $min;

		for ($i=$min+1; $i <= count($data)-1; $i++) {
			if ($data[$i] < $data[$min]) {
				$lastMin = $data[$i];
			}
		}

		list ($data[$min], $data[$lastMin]) = [$data[$lastMin], $data[$min]];

	}

	return $data;
}


function test(array $data) {

	$result = selectionSort($data);

	if ($result == [1,2,3,4,5,6]) {
		echo PHP_EOL . ' ok ' . PHP_EOL;
		print_r($result);
	} else {
		echo PHP_EOL . ' failed ' . PHP_EOL;
		print_r($result);		
	}
}

test($data);