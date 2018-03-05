<?php

namespace TestProject\PackageB;

class Service
{
    public function doSomething(UserInterface $user): bool
    {
        // check if User is instance of User

        return true;
    }
}
