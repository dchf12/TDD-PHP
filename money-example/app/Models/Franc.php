<?php

declare(strict_types=1);

namespace App\Models;

final class Franc extends Money {
	private string $currency;

	public function __construct(protected int $amount)
	{
		$this->currency = "CHF";
	}

	public function times(int $multiplier): Money
	{
		return new Franc($this->amount * $multiplier);
	}

	public function currency(): string
	{
		return $this->currency;
	}
}

