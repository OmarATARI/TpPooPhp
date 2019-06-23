<?php


namespace Meetings\App\Entity;


class Attendee extends User
{
    private $id;

    public function __construct(User $user, Meeting $meeting)
    {
        parent::__construct($user->first_name, $user->last_name, $user->email, $user->login, $user->password);
        $this->first_name = $user->first_name;
        $this->last_name = $user->last_name;
        $this->email = $user->email;
        $this->login = $user->login;
        $this->password = $user->password;

        $this->id = $meeting->getId();
    }
}