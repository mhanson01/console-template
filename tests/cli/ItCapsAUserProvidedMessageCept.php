<?php

$I = new CliTester($scenario);
$I->wantTo('capitalize a user provided message');

$I->runShellCommand('./app test foo --caps');

$I->seeInShellOutput('FOO');
