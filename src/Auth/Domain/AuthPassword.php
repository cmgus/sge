<?php

namespace Sge\Auth\Domain;

use Sge\Shared\Domain\StringValueObject;

final class AuthPassword extends StringValueObject
{
    public function isEquals(AuthPassword $other): bool
    {
        return $this->value() === $other->value();
    }
}
