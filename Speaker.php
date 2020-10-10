<?php
require_once('Person.php');

class Speaker extends Person
{
    public function __construct(string $name, string $phoneNumber, string $address, string $email)
    {
        parent::__construct($name, $phoneNumber, $address, $email);
    }
}
