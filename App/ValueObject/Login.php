<?php


namespace Meetings\App\ValueObject;


class Login
{
    private $login;

    public function __construct(string $login)
    {
        $this->login = $login;
    }
}