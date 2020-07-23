<?php

namespace Sge\Auth\Infrastructure\Persistence;

use Sge\Auth\Domain\AuthEmail;
use Sge\Auth\Domain\AuthPassword;
use Sge\Auth\Domain\AuthRepository;
use Sge\Auth\Domain\AuthUser;

final class InMemoryAuthRepository implements AuthRepository
{
    private const USER = [
        'gustavo@mail.com' => 'gusi'
    ];
    public function search(AuthEmail $email): ?AuthUser
    {
        $password = isset(self::USER[$email->value()]) ? self::USER[$email->value()] : null;
        return null !== $password ? new AuthUser($email, new AuthPassword($password)) : null;
    }
}
