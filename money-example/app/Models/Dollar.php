<?php

declare(strict_types=1);

namespace App\Models;

final class Dollar extends Money {
	public function __construct(protected int $amount, protected string $currency = "USD")
	{
		parent::__construct($amount, $currency);
	}

	public function times(int $multiplier): Money
	{
		return Money::dollar($this->amount * $multiplier);
	}
}

