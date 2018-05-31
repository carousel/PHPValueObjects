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
            throw new \Exception('Currecny code must be string');
        }
        $this->code = strtoupper($code);
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
     * Return currency represented as string
     *
     * @return string
     */
    public function toString(): String
    {
        return $this;
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

    /**
     * More user friendly interface for creating currency
     *
     * @param $method
     * @param $args
     * @return Currency
     */
    public static function __callStatic($method, $args = null): Currency
    {
        return Currency::fromString($method, $args);
    }
}
