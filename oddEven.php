<?php
// odd-even sort (also known as brick sort)

$data = [2,1,4,3,6,5];

function oddEvenSort(array &$data) {

	$isNeedToSort = true;

	while ($isNeedToSort) {

		$isNeedToSort = false;

		for ($i=0; $i<count($data)-1;$i+=2) {
			if ($data[$i+1] < $data[$i]) {
				list($data[$i], $data[$i+1]) = [$data[$i+1], $data[$i]];
				$isNeedToSort = true;
			}
		}

		for ($i=1; $i<count($data)-1;$i+=2) {
			if ($data[$i+1] < $data[$i]) {
				list($data[$i], $data[$i+1]) = [$data[$i+1], $data[$i]];
				$isNeedToSort = true;
			}			
		}

	}

	return $data;	
}


function test(array $data) {

	$result = oddEvenSort($data);

	if ($result == [1,2,3,4,5,6]) {
		echo PHP_EOL . ' ok ' . PHP_EOL;
		print_r($result);
	} else {
		echo PHP_EOL . ' failed ' . PHP_EOL;
		print_r($result);		
	}
}

test($data);

