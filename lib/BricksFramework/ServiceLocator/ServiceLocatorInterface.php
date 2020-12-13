<?php

/** @copyright Sven Ullmann <kontakt@sumedia-webdesign.de> **/

namespace BricksFramework\ServiceLocator;

interface ServiceLocatorInterface
{
    public function set(string $name, object $service) : void;
    public function get(string $name) : ?object;
    public function has(string $name) : bool;
    public function getServices() : array;
}
