#!/usr/bin/env php
<?php

require 'vendor/autoload.php';

use Acme\TestCommand;
use Symfony\Component\Console\Application;

$application = new Application();

$application->add(new TestCommand);

$application->run();