<?php


namespace Meetings\App\ValueObject;


class Email
{
    private $email;

    public function __construct(string $email)
    {
        $this->email = $email;
    }
}