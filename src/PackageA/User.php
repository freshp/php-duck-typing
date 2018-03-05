<?php

namespace TestProject\PackageA;

class User
{
    private $name;
    private $email;
    private $birthday;

    public function __construct(string $name, string $email, \DateTime $birthday)
    {
        $this->name = $name;
        $this->email = $email;
        $this->birthday = $birthday;
    }

    public function getBirthday(): \DateTime
    {
        return $this->birthday;
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function getName(): string
    {
        return $this->name;
    }
}
