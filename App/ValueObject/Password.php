<?php


namespace Meetings\App\ValueObject;


class Password
{
    private $password;
    private $non_hashed_password;

    public function __construct(string $password)
    {
        $this->non_hashed_password = $password;
        $this->password = password_hash($password);
    }
}