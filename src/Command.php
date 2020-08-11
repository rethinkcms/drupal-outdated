<?php

namespace RethinkCMS\Composer\Plugin\DrupalOutdated;

use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Composer\Command\ShowCommand;

class Command extends ShowCommand
{
    protected function configure()
    {
        parent::configure();
        $this->setName('drupal:outdated');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $output->writeln('Executing');
    }
}
