<?php
require_once('Person.php');
require_once('Event.php');
require_once('Talk.php');

class Participant extends Person
{
    public function __construct(string $name, string $phoneNumber, string $address, string $email)
    {
        parent::__construct($name, $phoneNumber, $address, $email);
    }

    public function eventSubscribe(Event $event)
    {
        $event->addParticipants($this);
    }

    public function talkSubscribe(Talk $talk, Event $event)
    {
        if ($event->validTalk($talk) && in_array($this, $event->getParticipants())) {
            $talk->addParticipants($this);
        }
    }
}
