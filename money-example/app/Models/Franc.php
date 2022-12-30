<?php

declare(strict_types=1);

namespace App\Models;

final class Franc {
	public function __construct(private int $amount)
	{
	}

	public function times(int $multiplier): Franc
	{
		return new Franc($this->amount * $multiplier);
	}

	public function equals(Franc $franc):bool
	{
		return $this->amount === $franc->amount;
	}
}

