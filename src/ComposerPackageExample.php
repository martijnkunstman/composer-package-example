<?php

namespace Martijnkunstman\ComposerPackageExample;

class ComposerPackageExample
{
    public function greet($greet = "Hello World")
    {
        return $greet;
    }
}

if (!function_exists('composerpackageexample')) {
    function composerpackageexample($greet = "Hello World")
    {
        return $greet;
    }
}