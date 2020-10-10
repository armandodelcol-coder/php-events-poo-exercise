<?php

class Event
{
    private $name;
    private $local;
    private $startAt;
    private $endAt;

    private $participants;
    private $talks;

    public function __construct(string $name, string $local, datetime $startAt, datetime $endAt)
    {
        $this->name = $name;
        $this->local = $local;
        $this->startAt = $startAt;
        $this->endAt = $endAt;
    }

    public function addTalks(Talk $talk): void
    {
        $this->talks[] = $talk;
    }

    public function addParticipants(Participant $participant): void
    {
        $this->participants[] = $participant;
    }

    public function validTalk(Talk $talk): bool
    {
        return in_array($talk, $this->talks) ? true : false;
    }

    public function getParticipants(): array
    {
        return $this->participants;
    }
}
