<?php

declare(strict_types=1);

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use App\Models\Dollar;

class MoneyTest extends TestCase
{
			
	public function setUp():void
	{
		parent::setUp();
	}

	public function testMultiplication()
	{
		$five = new Dollar(5);
		$five->times(2);
		$this->assertSame(10, $five->amount);
	}
}
