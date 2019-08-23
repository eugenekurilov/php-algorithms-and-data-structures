<?php 

$data = [2,1,3,1,5,4,5];
// min 1
// max 5
/*
$result = [];

$result[1] = 2;
$result[2] = 1;
$result[3] = 1;
$result[4] = 1;
$result[5] = 2;
*/

function countSort(array $data) {

	$counter = [];
	$result = [];

	foreach ($data as $value) {
		if (!isset($counter[$value])) {
			$counter[$value] = 1;
		} else {
			$counter[$value] += 1;
		}		
	}	

	foreach (range(1, 5) as $value) {
		if (isset($counter[$value])) {
			for ($i=0; $i<$counter[$value]; $i++) {
				$result[] = $value;
			}
		} 	
	} 

	return $result;
}

function test(array $data) {

	$result = countSort($data);

	if ($result == [1,1,2,3,4,5,5]) {
		echo PHP_EOL . ' ok ' . PHP_EOL;
		print_r($result); 
	} else {
		echo PHP_EOL . ' failed ' . PHP_EOL;
		print_r($result); 		
	}

}


test($data);
