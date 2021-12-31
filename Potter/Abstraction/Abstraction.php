<?php

namespace Potter\Abstraction;

final class Abstraction extends AbstractAbstraction
{
    use AbstractionTrait, AbstractionBaseClassTrait;

    public function __construct(string $baseClass, object $handle)
    {
        $this->setBaseClass($baseClass);
        $this->setObject($handle);
    }
}