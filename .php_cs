<?php

return PhpCsFixer\Config::create()
    ->setRules([
        '@PSR2' => true,
        '@PhpCsFixer' => true,
        'multiline_whitespace_before_semicolons' => true
    ])
    ->setFinder(
        PhpCsFixer\Finder::create()
            ->in(__DIR__)
    )
;