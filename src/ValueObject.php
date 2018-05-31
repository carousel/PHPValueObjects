<?php

namespace PHPValueObjects;

use PHPValueObjects\Money\Currency;

interface ValueObject
{
    public function toString();

    public static function fromString(Currency $currency, $amount);
}
