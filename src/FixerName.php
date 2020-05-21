<?php

namespace WeDevs\Fixer;

/**
 * The Fixer Trait.
 */
trait FixerName
{
    public function getName()
    {
        $name = parent::getName();

        return 'WeDevs/'.$name;
    }
}
