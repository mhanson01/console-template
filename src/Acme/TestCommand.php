<?php

namespace Acme;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;

class TestCommand extends Command
{
    protected function configure()
    {
        $this->setName('test')
             ->setDescription('Test command for a new project')
             ->addArgument(
                 'message',
                 InputArgument::OPTIONAL,
                 'The message you want to output'
             )
             ->addOption(
                'caps',
                null,
                InputOption::VALUE_NONE,
                'If set, the message will display in uppercase letters'
             );
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $message = $input->getArgument('message');

        if (!$message) {
            $message = 'This is a test message';
        }

        if ($input->getOption('caps')) {
            $message = strtoupper($message);
        }

        $output->writeln("<info>{$message}</info>");
    }
}

