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

    /**
     * @return string
     */
    public function getName()
    {
        return $this->user->getName();
    }

    public function getBirthday()
    {
        return $this->user->getBirthday();
    }
}