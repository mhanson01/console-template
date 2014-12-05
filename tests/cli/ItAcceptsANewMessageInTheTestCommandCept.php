<?php

$I = new CliTester($scenario);
$I->wantTo('pass a message to the test command');

$I->runShellCommand('./app test foo');

$I->seeInShellOutput('foo');
