<?php

namespace Sge\Users\Domain;

use Sge\Users\Domain\UserData;

class User
{
    private $email;
    private $password;
    private $data;
    public function __construct(string $email, string $password, ?UserData $data)
    {
        $this->email = $email;
        $this->password = $password;
        $this->data = $data;
    }
    public function isRighFormatEmail(): bool
    {
        return true;
    }
    public function isRightFormatPassword(): bool
    {
        return true;
    }
    public function email()
    {
        return $this->email;
    }
    public function password()
    {
        return $this->password;
    }
    public function data(): UserData
    {
        return $this->data;
    }
}
