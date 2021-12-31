<?php

namespace Potter\Abstraction;

use \TypeError;

trait AbstractionTrait
{
    private object $object;

    abstract public function getBaseClass(): string;

    final public function getClass(): string
    {
        return get_class($this->object);
    }

    final public function getObject(): object
    {
        return $this->object;
    }

    final public function setObject(object $object): void
    {
        $baseClass = $this->getBaseClass();
        if (!$object instanceOf $baseClass) {
            $class = get_class($object);
            throw new TypeError("Argument #1 (\$object) must be of type $baseClass, $class given");
        }
        
        $this->object = $object;
    }
}