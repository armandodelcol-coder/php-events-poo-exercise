<?php
require_once('Event.php');
require_once('Speaker.php');
require_once('Talk.php');
require_once('Participant.php');

$event1 = new Event(
    'PHP World',
    'Bragança Paulista - SP',
    new DateTime('2020-10-09T21:30:00-03:00'),
    new DateTime('2020-10-09T23:30:00-03:00')
);
$event2 = new Event(
    'JS World',
    'Bragança Paulista - SP',
    new DateTime('2020-10-10T21:30:00-03:00'),
    new DateTime('2020-10-10T23:30:00-03:00')
);

$speaker1 = new Speaker(
    'João',
    '1147856922',
    'Rua do João',
    'joao@123.com'
);
$speaker2 = new Speaker(
    'Maria',
    '1147856922',
    'Rua da Maria',
    'maria@123.com'
);

$talk1 = new Talk(
    'PHP in 2020',
    new DateTime('2020-10-09T21:35:00-03:00'),
    'PHP in These Days',
    30,
    $speaker1
);
$talk2 = new Talk(
    'PHP POO',
    new DateTime('2020-10-09T22:10:00-03:00'),
    'PHP in These Days',
    30,
    $speaker2
);

$event1->addTalks($talk1);
$event1->addTalks($talk2);

$participant1 = new Participant(
    'Armando',
    '1147856922',
    'Rua do Armando',
    'armando@123.com'
);
$participant2 = new Participant(
    'Ana',
    '1147856922',
    'Rua da Ana',
    'ana@123.com'
);

$participant1->eventSubscribe($event1);
$participant1->talkSubscribe($talk1, $event1);

//$participant2->eventSubscribe($event1);
$participant2->talkSubscribe($talk1, $event1);

echo '<pre>';
print_r($event1);
echo '</pre>';
echo '<pre>';
print_r($event2);
echo '</pre>';
