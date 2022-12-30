<?php

declare(strict_types=1);

namespace App\Models;

class Money {

	public function __construct(protected int $amount)
	{
	}

	public function equals(Money $money): bool
	{
		return $this->amount === $money->amount;
	}

}
