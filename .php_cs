<?php
use PhpCsFixer\Finder;
$finder = Finder::create()
    ->in(__DIR__ . '/src')
;
return \PhpCsFixer\Config::create()
    ->setFinder($finder)
    ->setRules([
        '@PSR2' => true,
    ])
;