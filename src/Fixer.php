<?php
namespace WeDevs\Fixer;

use PhpCsFixer\AbstractFixer;

/**
 * Class
 */
trait FixerName
{

    public function getName() {
        $name = parent::getName();

        return 'WeDevs/' . $name;
    }
}
