<?php

declare(strict_types=1);

namespace App\Models;

final class Franc extends Money {
	public function __construct(protected int $amount, protected string $currency = "CHF")
	{
		parent::__construct($amount, $currency);
	}
}

