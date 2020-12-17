<?php

declare(strict_types=1);

namespace antonmarin\experiment\entrypoints;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class TestDebugCli extends Command
{
    public function __construct()
    {
        parent::__construct();
    }

    /** @noinspection PhpMissingParentCallCommonInspection */
    protected function configure(): void
    {
        $this
            ->setName('test:logger-debug')
            // the short description shown while running "php bin/console list"
            ->setDescription('Test command');
    }

    /** @noinspection PhpMissingParentCallCommonInspection */
    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        return Command::SUCCESS;
    }
}
