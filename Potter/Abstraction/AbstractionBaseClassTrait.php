<?php

namespace Potter\Abstraction;

use \Exception;

trait AbstractionBaseClassTrait
{
    private string $baseClass = AbstractionInterface::DEFAULT_BASE_CLASS;

    final public function getBaseClass(): string
    {
        return $this->baseClass;
    }

    final public function setBaseClass(string $baseClass): void
    {
        if (!class_exists($baseClass)) {
            throw new Exception("Class \"$baseClass\" not found");
        }
        $this->baseClass = $baseClass;
    }
}