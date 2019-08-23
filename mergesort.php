<?php

$data = [2,1,4,3,6,5];

function mergeSort(array $data) {

	if (count($data) <= 1) {
		return $data;
	}

	$middle = (int) count($data)/2;

	$left = array_slice($data, 0, $middle);
	$right = array_slice($data, $middle);

	$mergeLeft = mergeSort($left);
	$mergeRight = mergeSort($right);


	return merge($mergeLeft, $mergeRight);
}

function merge($mergeLeft, $mergeRight) {

	$result = [];
	$mergeLeftIndex = 0; 
	$mergeRightIndex = 0;

	while ($mergeLeftIndex < count($mergeLeft) &&  $mergeRightIndex < count($mergeRight)) {

		if ($mergeLeft[$mergeLeftIndex] > $mergeRight[$mergeRightIndex]) {
			$result[] = $mergeRight[$mergeRightIndex];
			$mergeRightIndex += 1;
		} elseif ($mergeLeft[$mergeLeftIndex] < $mergeRight[$mergeRightIndex] )  {
			$result[] = $mergeLeft[$mergeLeftIndex];
			$mergeLeftIndex += 1;
		} 
	}


    while ($mergeLeftIndex < count($mergeLeft)) {
    	$result[] = $mergeLeft[$mergeLeftIndex];
    	$mergeLeftIndex += 1;
    }

    while ($mergeRightIndex < count($mergeRight)) {
    	$result[] = $mergeRight[$mergeRightIndex];
    	$mergeRightIndex += 1;
    }

    return $result;
}

function test(array $data) {

	 $result = mergeSort($data);

	 if ($result == [1,2,3,4,5,6]) {
	 	echo PHP_EOL . " ok " . PHP_EOL; 
	 	print_r($result);
	 } else {
	 	echo PHP_EOL . " faeled " . PHP_EOL; 
	 	print_r($result);
	 }
}

test($data);