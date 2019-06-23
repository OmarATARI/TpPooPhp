<?php


namespace Meetings\App\ValueObject;


class FirstName
{
    private $first_name;

    public function __construct(string $name)
    {
        $this->first_name = $name;
    }
}