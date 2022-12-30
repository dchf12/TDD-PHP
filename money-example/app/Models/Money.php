<?php

declare(strict_types=1);

namespace App\Models;

abstract class Money {

	abstract protected function times(int $multiplier): Money;
	abstract protected function currency(): string;

	public function __construct(protected int $amount)
	{
	}

	public function equals(Money $money): bool
	{
		return $this->amount === $money->amount && get_class($money) === get_class($this);
	}

	public static function dollar(int $amount): Money
	{
		return new Dollar($amount);
	}

	public static function franc(int $amount): Money
	{
		return new Franc($amount);
	}
}
