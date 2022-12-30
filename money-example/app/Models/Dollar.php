<?php

declare(strict_types=1);

namespace App\Models;

final class Dollar extends Money {
	public function __construct(protected int $amount)
	{
	}

	public function times(int $multiplier): Dollar
	{
		return new Dollar($this->amount * $multiplier);
	}
}

