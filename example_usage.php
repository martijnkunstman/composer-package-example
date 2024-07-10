<?php

require_once 'vendor/autoload.php';

use Martijnkunstman\ComposerPackageExample\ComposerPackageExample;
use function Martijnkunstman\ComposerPackageExample\composerpackageexample;

$composerPackageExample = new ComposerPackageExample();
echo $composerPackageExample->greet("Hello World #1 ");
echo composerpackageexample("Hello World #2 ");