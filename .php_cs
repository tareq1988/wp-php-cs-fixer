<?php

$finder = PhpCsFixer\Finder::create()
    ->exclude('vendors')
    ->in(__DIR__)
;

$config = PhpCsFixer\Config::create()
    ->setRiskyAllowed(true)
    ->setRules([
        '@PHP56Migration' => true,
        '@PHPUnit60Migration:risky' => true,
        '@PhpCsFixer' => true,
        '@PhpCsFixer:risky' => true,
        'list_syntax' => ['syntax' => 'long'],
    ])
    ->setFinder($finder)
;

return $config;
