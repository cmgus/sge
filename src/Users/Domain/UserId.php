<?php

namespace Sge\Users\Domain;

class UserId
{
    private $value;
    public function __construct(int $value)
    {
        $this->value = $value;
    }
    public function value(): int
    {
        return $this->value;
    }
}
