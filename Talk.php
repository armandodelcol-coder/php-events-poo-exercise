<?php

class Talk
{
    private $name;
    private $startAt;
    private $theme;
    private $duration;

    private $participants;

    public function __construct(string $name, datetime $startAt, string $theme, int $duration, Speaker $speaker)
    {
        $this->name = $name;
        $this->startAt = $startAt;
        $this->theme = $theme;
        $this->duration = $duration;
        $this->speaker = $speaker;
    }

    public function addParticipants(Participant $participant): void
    {
        $this->participants[] = $participant;
    }
}
