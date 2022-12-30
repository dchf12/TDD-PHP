<?php

declare(strict_types=1);

namespace App\Models;

final class Dollar extends Money {
	private string $currency;

	public function __construct(protected int $amount)
	{
		$this->currency = "USD";
	}

	public function times(int $multiplier): Money
	{
		return new Dollar($this->amount * $multiplier);
	}

	public function currency(): string
	{
		return $this->currency;
	}
}

