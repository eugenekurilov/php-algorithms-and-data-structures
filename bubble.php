<?php 

function bubbleSort(array $numbers) {

    $count = count($numbers);

	for ($i = 0; $i < $count; $i++) {
		for ($j = 0; $j < $count; $j++) {
			if ($numbers[$i] < $numbers[$j]) {
				list($numbers[$i], $numbers[$j]) = [
					$numbers[$j],
					$numbers[$i]
				];
			}
		}
	}

	return $numbers;
}

print_r(bubbleSort([4,1,6,9,11]));
