<?php

namespace Tests\Unit;
use Tests\TestCase;

class FibonacciTest extends TestCase{

	public function fib(int $n)
	{
		if ($n === 0) return 0;
		if ($n === 1) return 1;
		return self::fib($n-1) + self::fib($n-2);
	}

	public function testFibonacci(){
		$cases = [
			0 => 0,
			1 => 1,
			2 => 1,
			3 => 2,
		];

		foreach($cases as $i => $case)
		{
			$this->assertSame($case, self::fib($i));
		}
	}
}
