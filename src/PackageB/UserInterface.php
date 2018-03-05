<?php

namespace TestProject\PackageB;

interface UserInterface
{
    const TEST = 'test';

    public function getName(): string;

    public function getBirthday(): \DateTime;
}
