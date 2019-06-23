<?php


namespace Meetings\App\Entity;


interface AssignRoleInterface extends CreateMeetingInterface
{
    public function assignOrganizer(User $user, Meeting $meeting) : Organizer;
    public function assignAttendee(User $user, Meeting $meeting) : Attendee;
}