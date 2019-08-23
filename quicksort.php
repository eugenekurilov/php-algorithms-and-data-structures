<?php

$data = [3,1,4,2,6,5];

function quickSort(array $data) {

	if (count($data) <= 1) {
		return $data;
	}

	$pivot = $data[0];

	$left = [];
	$right = [];

	foreach ($data as $key => $value) {
		
		if ($data[$key] < $pivot) {
			$left[] = $value;
		} elseif ($data[$key] > $pivot) {
			$right[] = $value;
		}
 	}

	return array_merge(quickSort($left), [$pivot], quickSort($right));
}

function test(array $data) {

	$result = quickSort($data);

	if ($result == [1,2,3,4,5,6]) {
		echo PHP_EOL . ' ok ' . PHP_EOL;
		print_r($result);
	} else {
		echo PHP_EOL . ' failed ' . PHP_EOL;
		print_r($result);		
	}

}


test($data);
