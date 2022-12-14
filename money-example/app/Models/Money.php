<?php

declare(strict_types=1);

namespace App\Models;

class Money {

	public function __construct(protected int $amount, protected string $currency)
	{
	}

	public function equals(Money $money): bool
	{
		return $this->amount === $money->amount && $this->currency() === $money->currency();
	}

	public function currency(): string
	{
		return $this->currency;
	}

	public static function dollar(int $amount): Money
	{
		return new Money($amount, "USD");
	}

	public static function franc(int $amount): Money
	{
		return new Money($amount, "CHF");
	}

	public function times(int $multiplier)
	{
		return new Money($this->amount * $multiplier, $this->currency);
	}
}
