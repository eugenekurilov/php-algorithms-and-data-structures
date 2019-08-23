<?php

//cocktail sort

$data = [2,1,4,3,6,5];

function cockTailSort(array &$data) {

	$left = 0;
	$right = count($data) - 1;

 	do {

 		for ($i=$left; $i<$right; $i++) {
 			if ($data[$i] > $data[$i+1]) {
 				list ($data[$i], $data[$i+1]) = [$data[$i+1],  $data[$i]];
 			}
 		}

 		$left +=1;

 		for ($i=$right; $i>$left; $i--) {
 			if ($data[$i] < $data[$i-1]) {
 				list($data[$i], $data[$i+1]) = [$data[$i+1],  $data[$i]];
 			} 			
 		}

		$right -= 1; 		

 	} while ($left <= $right);


	return $data;
}


function test(array $data) {

	$result = cockTailSort($data);

	if ($result == [1,2,3,4,5,6]) {
		echo PHP_EOL . ' ok ' . PHP_EOL;
		print_r($result);
	} else {
		echo PHP_EOL . ' failed ' . PHP_EOL;
		print_r($result);		
	}

}

test($data);