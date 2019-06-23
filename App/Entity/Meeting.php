<?php


namespace Meetings\App\Entity;


class Meeting
{
    private $id;
    private $date_start;
    private $date_end;
    private $title;
    private $description;
    private $price;

    private static $id_index = 0;

    public function __construct(
        int $id,
        \DateTime $datestart,
        \DateTime $dateend,
        string $title,
        string $description,
        float $price
    )
    {
        static::$id_index++;
        $this->id = static::$id_index;
        $this->date_start = $datestart;
        $this->date_end = $dateend;
        $this->title = $title;
        $this->description = $description;
        $this->price = $price;
    }

    public function getId() : int
    {
        return $this->id;
    }
}