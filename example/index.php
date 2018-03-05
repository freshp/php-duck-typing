<?php

require_once __DIR__ . '/../vendor/autoload.php';

$service = new \TestProject\PackageB\Service();
$testUser = new \TestProject\PackageB\TestUser();
$apiUser = new \TestProject\PackageA\User('test', 'test@test.de', new \DateTime('now'));

// check if object fits to interface with loose coupling
// result: bool(true)
var_dump(
    \TestProject\CompareClassAndInterface\CompareService::fit(
        \TestProject\PackageA\User::class,
        \TestProject\PackageB\UserInterface::class
    )
);

// normal workflow for interfaces
// result: bool(true)
var_dump($service->doSomething($testUser));

// decorator workflow for interfaces
// result: bool(true)
var_dump($service->doSomething(new \TestProject\PackageB\DecoratorUser($apiUser)));

// what is the best way to do this?
// result: Exception...
var_dump($service->doSomething($apiUser));
