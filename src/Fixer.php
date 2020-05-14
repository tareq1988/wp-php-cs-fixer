<?php

/*
 * This file is part of weDocs.
 *
 * (c) Tareq Hasan <tareq@wedevs.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace WeDevs\Fixer;

/**
 * The Fixer Trait.
 */
trait Fixer
{
    public function getName()
    {
        $name = parent::getName();

        return 'WeDevs/'.$name;
    }
}
