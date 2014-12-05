<?php

$I = new CliTester($scenario);
$I->wantTo('run the test command');

$I->runShellCommand('./app test');

$I->seeInShellOutput('This is a test message');
