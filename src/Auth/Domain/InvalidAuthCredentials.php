<?php

namespace Sge\Auth\Domain;

use Sge\Auth\Domain\AuthEmail;
use RuntimeException;

final class InvalidAuthCredentials extends RuntimeException
{
    public function __construct(AuthEmail $email)
    {
        parent::__construct(sprintf('Las credenciales para <%s> son invalidas', $email->value()));
    }
}
