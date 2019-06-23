<?php


namespace Meetings\App\Entity;


interface CreateMeetingInterface
{
    public function createMeeting($date_start, $date_end, $title, $description, $price) : Meeting;
}