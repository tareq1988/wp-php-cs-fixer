# PHP CS Fixer: WordPress fixers

A set of custom fixers for [PHP CS Fixer](https://github.com/FriendsOfPHP/PHP-CS-Fixer), specially for WordPress.

## Installation
PHP CS Fixer: custom fixers can be installed by running:
```bash
composer require --dev tareq1988/wp-php-cs-fixer
```

## Usage
In your PHP CS Fixer configuration register fixers and use them:
```diff
 <?php
 return PhpCsFixer\Config::create()
+    ->registerCustomFixers([
        new WeDevs\Fixer\SpaceInsideParenthesisFixer(),
        new WeDevs\Fixer\BlankLineAfterClassOpeningFixer()
     ])
     ->setRules([
         '@PSR2' => true,
         'array_syntax' => ['syntax' => 'short'],
+        'WeDevs/space_inside_parenthesis'         => true,
+        'WeDevs/blank_line_after_class_opening'   => true,
     ]);
```
