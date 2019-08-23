<?php 

function panCakeSort(array &$data) {

	for ($i=count($data)-1; $i>=0;$i--) {
		$maxIndex = maxIndex($data, $i);
		flip($data, $maxIndex);
		flip($data, $i);
	}

}

function flip(array &$data, $stop) {
	for ($start = 0; $start <= $stop; $start++, $stop--) {
		$temp = $data[$start];
		$data[$start] = $data[$stop];
		$data[$stop] = $temp;
	}
}

function maxIndex(array $data, int $stop) {

	$maxIndex = 0;

	for ($i=0; $i<=$stop; ++$i) {
		if ($data[$maxIndex] < $data[$i]) {
			$maxIndex = $i;
		}
	}

	return $maxIndex;
}

$data = [3,1,5,7,2];

panCakeSort($data);

print_r($data);