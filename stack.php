<?php

class Stack 
{
	private $seq = [];


	public function pop() 
	{
		if (!$this->isEmpty()) {
			return array_shift($this->seq);
		} else {
			return null;
		}
	}

	public function push($value) 
	{
		return array_unshift($this->seq, $value);
	}	

	public function top() 
	{
		return current($this->seq);
	}


	public function isEmpty() 
	{
		return count($this->seq) ? false : true;
	}

}


function testTop()
{
	$stack  = new Stack();
	$stack->push(10);
	$stack->pop();
	if ($stack->top() == 10) {
		echo PHP_EOL . ' top ok ' . PHP_EOL;
	} else {
		echo PHP_EOL . ' top failed ' . PHP_EOL;
	}
}

function testPop() {
	$stack  = new Stack();
	$stack->push(10);

	if ($stack->pop() == 10) {
		echo PHP_EOL . ' pop ok ' . PHP_EOL;
	} else {
		echo PHP_EOL . ' pop failed ' . PHP_EOL;
	}
}

function testPush() {
	$stack  = new Stack();
	$stack->push(10);
	$stack->push(20);

	if ($stack->pop() == 20) {
		echo PHP_EOL . ' push ok ' . PHP_EOL;
	} else {
		echo PHP_EOL . ' push failed ' . PHP_EOL;
	}
}

function testIsEmpty() {
	$stack = new Stack();
	if ($stack->isEmpty() == true) {
		echo PHP_EOL . ' isEmpty ok ' . PHP_EOL;
	} else {
		echo PHP_EOL . ' isEmpty failed ' . PHP_EOL;	
	}
}


testPop();
testPush();
testIsEmpty();
testTop();