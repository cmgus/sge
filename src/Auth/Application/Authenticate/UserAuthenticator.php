<?php

namespace Sge\Auth\Application\Authenticate;

use RuntimeException;
use Sge\Auth\Domain\AuthEmail;
use Sge\Auth\Domain\AuthPassword;
use Sge\Auth\Domain\AuthRepository;
use Sge\Auth\Domain\AuthUser;
use Sge\Auth\Domain\InvalidAuthCredentials;
use Sge\Auth\Domain\InvalidAuthEmail;

final class UserAuthenticator
{
    private $repository;
    public function __construct(AuthRepository $repository)
    {
        $this->repository = $repository;
    }
    public function authenticate(AuthEmail $email, AuthPassword $password): void
    {
        $auth = $this->repository->search($email);
        $this->ensureUserExist($auth, $email);
        $this->ensureCredentialsAreValid($auth, $password);
    }
    private function ensureUserExist(?AuthUser $auth, AuthEmail $username): void
    {
        if (null === $auth) {
            throw new InvalidAuthEmail($username);
        }
    }

    private function ensureCredentialsAreValid(AuthUser $auth, AuthPassword $password): void
    {
        if (!$auth->passwordMatches($password)) {
            throw new InvalidAuthCredentials($auth->email());
        }
    }
}
