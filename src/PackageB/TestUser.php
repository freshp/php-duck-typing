<?php

namespace TestProject\PackageB;

class TestUser implements UserInterface
{
    /**
     * @return string
     */
    public function getName()
    {
        return 'name';
    }

    /**
     * @return \DateTime
     */
    public function getBirthday()
    {
        return new \DateTime();
    }

} 