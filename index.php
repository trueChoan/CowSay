<?php
require 'vendor/autoload.php';

use CowSay\Cow;

$bessie = new Cow('Hello, Farm!');

echo $bessie->say();


$bessie->setTongue("U")
    ->setEyes("oO")
    ->setPoop('@@@');

echo $bessie;
