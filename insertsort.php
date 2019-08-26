<?php

/*
   Insertion sort:

   Best-case performance  - O(n)    (minimum number of steps on input data of size n)
   Worst-case performance - O(n**2) (maximum number of steps on input data of size n)
   Average performance    - O(n**2) (average number of steps on input data of size n)
   Space complexity       - O(1)
*/


$data = [2,1,4,3,6,5];	


function insertingSort(array &$data) {

	for ($i=0; $i<count($data); $i++) {

		$top = $i;

		while ($top > 0 && $data[$top-1] > $data[$top] ) {
			list($data[$top], $data[$top-1]) = [$data[$top-1], $data[$top]];
			$top -= 1;
		}

	}

	return $data;	
}

function test(array &$data) {

	$result = insertingSort($data);

	if ($result == [1,2,3,4,5,6]) {
		echo PHP_EOL . ' ok ' . PHP_EOL;
		print_r($result); 
	} else {
		echo PHP_EOL . ' failed ' . PHP_EOL;
		print_r($result); 
	}

}



test($data);
