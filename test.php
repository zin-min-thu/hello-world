<?php

use MyPackage\HelloWorld;

require 'vendor/autoload.php';

$hello = new HelloWorld();

echo $hello->sayHello();