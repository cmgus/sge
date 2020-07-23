<?php

namespace Sge\App\Backend\Controllers\Auth;

use Laminas\Diactoros\ServerRequest;
use Psr\Http\Message\ServerRequestInterface;
use RuntimeException;
use Sge\Auth\Application\Authenticate\AuthenticateUserCommand;
use Sge\Auth\Application\Authenticate\AuthenticateUserCommandHandler;
use Sge\Auth\Application\Authenticate\UserAuthenticator;
use Sge\Auth\Infrastructure\Persistence\InMemoryAuthRepository;

final class AuthPost
{
    public function __invoke(): array
    {
        try {
            $command = new AuthenticateUserCommand($_POST['email'], $_POST['password']);
            $handler = new AuthenticateUserCommandHandler(new UserAuthenticator(new InMemoryAuthRepository));
            $handler($command);
            return [
                'message' => 'Ingreso satisfactorio'
            ];
        } catch (RuntimeException $th) {
            return [
                'message' => $th->getMessage()
            ];
        }
    }
}
