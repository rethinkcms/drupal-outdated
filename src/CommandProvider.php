<?php

namespace RethinkCMS\Composer\Plugin\DrupalOutdated;

use Composer\Plugin\Capability\CommandProvider as CommandProviderCapability;

class CommandProvider implements CommandProviderCapability
{
    /**
     * {@inheritdoc}
     */
    public function getCommands()
    {
        return array(new Command);
    }
}
