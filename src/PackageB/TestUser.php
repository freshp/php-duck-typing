<?php

namespace TestProject\PackageB;

class TestUser implements UserInterface
{
    /**
     * @return string
     */
    public function getName(): string
    {
        return 'name';
    }

    /**
     * @return \DateTime
     */
    public function getBirthday(): \DateTime
    {
        return new \DateTime();
    }

}
