<?php

$header = <<<'EOF'
This file is part of weDocs.

(c) Tareq Hasan <tareq@wedevs.com>

This source file is subject to the GNU General Public License v2.0
that is bundled with this source code in the file LICENSE.
EOF;

$finder = PhpCsFixer\Finder::create()
    ->exclude('vendors')
    ->in(__DIR__)
;

$config = PhpCsFixer\Config::create()
    ->setRiskyAllowed(true)
    ->setRules([
        '@PhpCsFixer' => true,
        'header_comment' => ['header' => $header],
        'list_syntax' => ['syntax' => 'long'],
    ])
    ->setFinder($finder)
;
