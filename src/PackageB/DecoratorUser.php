<?php

namespace TestProject\PackageB;

use TestProject\PackageA\User;

class DecoratorUser implements UserInterface
{
    private $user;

    public function __construct(User $user)
    {
        $this->user = $user;
    }

    public function getName(): string
    {
        return $this->user->getName();
    }

    public function getBirthday(): \DateTime
    {
        return $this->user->getBirthday();
    }
}
