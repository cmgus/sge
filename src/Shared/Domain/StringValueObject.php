<?php

namespace Sge\Shared\Domain;

abstract class StringValueObject
{
    protected $value;
    public function __construct(string $value)
    {
        $this->value = $value;
    }
    public function value(): string
    {
        return $this->value;
    }
}
