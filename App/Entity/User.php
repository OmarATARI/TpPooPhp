<?php


namespace Meetings\App\Entity;


use Meetings\App\ValueObject\FirstName;
use Meetings\App\ValueObject\LastName;
use Meetings\App\ValueObject\Email;
use Meetings\App\ValueObject\Login;
use Meetings\App\ValueObject\Password;

class User implements AssignRoleInterface
{
    protected $first_name;
    protected $last_name;
    protected $email;
    protected $login;
    protected $password;

    public function __construct(FirstName $first_name, LastName $last_name, Email $email, Login $login, Password $password)
    {
        $this->first_name = $first_name;
        $this->last_name = $last_name;
        $this->email = $email;
        $this->login = $login;
        $this->password = $password;
    }

    public function createMeeting($date_start, $date_end, $title, $description, $price) : Meeting
    {
        // TODO: Implement createMeeting() method.
        return new Meeting($date_start, $date_end, $title, $description, $price);
    }

    public function assignAttendee(User $user, Meeting $meeting) : Attendee
    {
        // TODO: Implement assignAttendee() method.
        return new Attendee($user, $meeting );
    }

    public function assignOrganizer(User $user, Meeting $meeting) : Organizer
    {
        // TODO: Implement assignOrganizer() method.
        return new Organizer($user, $meeting);
    }
}