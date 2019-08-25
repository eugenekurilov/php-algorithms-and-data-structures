<?php

$data = [2,1,4,3,6,5];

function gnomeSort(array &$data) {

	$pointer = 0;

	while ($pointer < count($data)-1) {

		if ($data[$pointer+1] < $data[$pointer]) {
			list ($data[$pointer], $data[$pointer+1]) = [$data[$pointer+1], $data[$pointer]];
			$pointer -= 1;
		} else {
			$pointer += 1;
		}
	}

	return $data;
}

function test(array $data) {

	$result = gnomeSort($data);

	if ($result == [1,2,3,4,5,6]) {
		echo PHP_EOL . ' OK ' , PHP_EOL;
		print_r($result);
	} else {
		echo PHP_EOL . ' FAILED ' , PHP_EOL;
		print_r($result);		
	}
}

test($data);