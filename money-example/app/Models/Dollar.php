<?php

declare(strict_types=1);

namespace App\Models;

final class Dollar{
	public function __construct(public int $amount)
	{
		$this->amount = 10;
	}

	public function times(int $multiplier):void
	{
	}


}

