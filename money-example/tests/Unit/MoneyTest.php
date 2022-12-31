<?php

declare(strict_types=1);

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use App\Models\Dollar;
use App\Models\Franc;
use App\Models\Money;
use Termwind\Components\Dd;

class MoneyTest extends TestCase
{
			
	public function setUp():void
	{
		parent::setUp();
	}

	public function testMultiplication()
	{
		$five = Money::dollar(5);
		$this->assertSame(Money::dollar(10), $five->times(2));
		$this->assertSame(Money::dollar(15), $five->times(3));
	}

	public function testEquality()
	{
		$this->assertTrue((Money::dollar(5))->equals(Money::dollar(5)));
		$this->assertFalse((Money::dollar(5))->equals(Money::dollar(6)));
		$this->assertTrue((Money::franc(5))->equals(Money::franc(5)));
		$this->assertFalse((Money::franc(5))->equals(Money::franc(6)));
		$this->assertFalse((Money::franc(5))->equals(Money::dollar(5)));
	}

	public function testFrancMultiplication()
	{
		$five = Money::franc(5);
		$this->assertSame(Money::franc(10), $five->times(2));
		$this->assertSame(Money::franc(15), $five->times(3));
	}
	
	public function testCurrency()
	{
		$this->assertSame("USD", Money::dollar(1)->currency());
		$this->assertSame("CHF", Money::franc(1)->currency());
	}

	public function testDifferentClassEquality()
	{
		$this->assertTrue((new Money(10, "CHF"))->equals(new Franc(10, "CHF")));
	}
}
