<?php

namespace Sge\Auth\Domain;

use Sge\Auth\Domain\AuthEmail;
use Sge\Auth\Domain\AuthPassword;

final class AuthUser
{
    private $email;
    private $password;
    public function __construct(AuthEmail $email, AuthPassword $password)
    {
        $this->email = $email;
        $this->password = $password;
    }
    public function passwordMatches(AuthPassword $password): bool
    {
        return $this->password->isEquals($password);
    }
    public function email(): AuthEmail
    {
        return $this->email;
    }
}
