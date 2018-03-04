<?php

namespace TestProject\PackageB;

interface UserInterface
{
    const TEST = 'test';

    /**
     * @return string
     */
    public function getName();

    /**
     * @return \DateTime
     */
    public function getBirthday();
}