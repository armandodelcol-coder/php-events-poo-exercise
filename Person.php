<?php

abstract class Person
{
    private $name;
    private $phoneNumber;
    private $address;
    private $email;

    public function __construct(string $name, string $phoneNumber, string $address, string $email)
    {
        $this->name = $name;
        $this->phoneNumber = $phoneNumber;
        $this->address = $address;
        $this->email = $email;
    }
}
