<?php

namespace Potter\Abstraction;

abstract class AbstractAbstraction implements AbstractionInterface
{
    abstract public function getBaseClass(): string;

    abstract public function getClass(): string;

    abstract public function getObject(): object;

    abstract public function setBaseClass(string $baseClass): void;

    abstract public function setObject(object $object): void;
}