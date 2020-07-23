<?php

namespace Sge\Auth\Infrastructure;

use Sge\Auth\Domain\AuthEmail;
use Sge\Auth\Domain\AuthRepository;
use Sge\Auth\Domain\AuthUser;

class MysqlAuthRepository implements AuthRepository
{
    public function search(AuthEmail $email): ?AuthUser
    {
        return null;
    }
}
