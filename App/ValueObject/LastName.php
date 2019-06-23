<?php


namespace Meetings\App\ValueObject;


class LastName
{
    private $last_name;

    public function __construct(string $name)
    {
        $this->last_name = $name;
    }
}