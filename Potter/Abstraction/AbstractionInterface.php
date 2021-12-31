<?php

namespace Potter\Abstraction;

interface AbstractionInterface
{
    final public const DEFAULT_BASE_CLASS = 'stdClass';

    public function getBaseClass(): string;

    public function getClass(): string;

    public function getObject(): object;

    public function setBaseClass(string $baseClass): void;

    public function setObject(object $object): void;
}