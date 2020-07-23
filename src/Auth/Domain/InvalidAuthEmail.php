<?php

namespace Sge\Auth\Domain;

use RuntimeException;

final class InvalidAuthEmail extends RuntimeException
{
    public function __construct(AuthEmail $email)
    {
        parent::__construct(sprintf('El email <%s> no esta registrado', $email->value()));
    }
}
