<?php

declare(strict_types=1);

namespace App\Models;

final class Dollar{
	public function __construct(private int $amount)
	{
	}

	public function times(int $multiplier): Dollar
	{
		return new Dollar($this->amount * $multiplier);
	}

	public function equals(Dollar $object):bool
	{
		return $this->amount === $object->amount;
	}
}

