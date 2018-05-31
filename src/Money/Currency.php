<?php

namespace PHPValueObjects\Money;

use Exception;

final class Currency
{
    /**
     * Money constructor.
     * @param $currency
     * @param $amount
     */
    private function __construct($code)
    {
        if (!is_string($code)) {
            throw new \Exception('Code must be string');
        }
        $this->code = $code;
    }

    /**
     * Create money from string input
     *
     * @param $currency
     * @param $amount
     * @return Money
     */
    public static function fromString($code): Currency
    {
        return new Currency($code);
    }

    /**
     * Return money represented as currency + amount
     *
     * @return string
     */
    public function __toString(): String
    {
        return $this->code;
    }

    /**
     * Get currency
     *
     * @return mixed
     */
    private function getCode()
    {
        return $this->code;
    }
}
