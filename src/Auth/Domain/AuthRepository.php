<?php

namespace Sge\Auth\Domain;

use Sge\Auth\Domain\AuthUser;

interface AuthRepository
{
    public function search(AuthEmail $email): ?AuthUser;
}
