<?php

$I = new CliTester($scenario);
$I->wantTo('capitalize the default message');

$I->runShellCommand('./app test --caps');

$I->seeInShellOutput('THIS IS A TEST MESSAGE');
