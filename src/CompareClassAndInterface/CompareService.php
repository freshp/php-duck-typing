<?php

namespace TestProject\CompareClassAndInterface;

class CompareService
{
    /**
     * example to check if an object fits to an interface without coupling
     *
     * @param object|string $object
     * @param string $interface
     *
     * @return bool
     * @throws \ReflectionException
     */
    public static function fit($object, $interface): bool
    {
        if (true === is_a($object, $interface)) {
            return true;
        }

        $interfaceReflection = new \ReflectionClass($interface);

        foreach ($interfaceReflection->getMethods() as $method) {
            $tmpMethodName = $method->getName();

            if (false === method_exists($object, $tmpMethodName)) {
                return false;
            }

            $objectReflectionMethod = new \ReflectionMethod($object, $tmpMethodName);
            $interfaceReflectionMethod = new \ReflectionMethod($interface, $tmpMethodName);
            if ($interfaceReflectionMethod->getParameters() !== $objectReflectionMethod->getParameters()) {
                return false;
            }
        }

        return true;
    }
}
