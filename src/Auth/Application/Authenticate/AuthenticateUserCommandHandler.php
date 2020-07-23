<?php

namespace Sge\Auth\Application\Authenticate;

// use Sge\Auth\Application\Authenticate\UserAuthenticator;
// use Sge\Auth\Application\Authenticate\AuthenticateUserCommand;
// ***use Sge\Auth\Application\Authenticate\AuthenticateUserHandler;

use RuntimeException;
use Sge\Auth\Domain\AuthEmail;
use Sge\Auth\Domain\AuthPassword;

final class AuthenticateUserCommandHandler
{
    private $authenticator;
    public function __construct(UserAuthenticator $authenticator)
    {
        $this->authenticator = $authenticator;
    }
    public function __invoke(AuthenticateUserCommand $command): void
    {
        $email = new AuthEmail($command->email());
        $password = new AuthPassword($command->password());
        $this->authenticator->authenticate($email, $password);
    }
}
