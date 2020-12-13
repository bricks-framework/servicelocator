<?php

/** @copyright Sven Ullmann <kontakt@sumedia-webdesign.de> **/

namespace BricksFramework\ServiceLocator;

class ServiceLocator implements ServiceLocatorInterface
{
    protected $services;

    public function set(string $name, object $service) : void
    {
        $this->services[$name] = $service;
    }

    public function get(string $name) : ?object
    {
        return $this->services[$name] ?? null;
    }

    public function has(string $name) : bool
    {
        return isset($this->services[$name]);
    }

    public function getServices() : array
    {
        return $this->services;
    }
}