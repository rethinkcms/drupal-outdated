<?php

namespace RethinkCMS\Composer\Plugin\DrupalOutdated;

use Composer\Plugin\PluginInterface;
use Composer\EventDispatcher\EventSubscriberInterface;
use Composer\Plugin\Capable;
use Composer\Composer;
use Composer\IO\IOInterface;
use Composer\Plugin\Capability\CommandProvider;
use RethinkCMS\Composer\Plugin\DrupalOutdated\CommandProvider as DrupalOutdatedCommandProvider;
use Composer\Plugin\PluginEvents;

class Plugin implements PluginInterface, EventSubscriberInterface, Capable
{
    protected $composer;
    protected $io;

    public function activate(Composer $composer, IOInterface $io)
    {
        $this->composer = $composer;
        $this->io = $io;
    }

    public function getCapabilities()
    {
        return array(
            CommandProvider::class => DrupalOutdatedCommandProvider::class,
        );
    }

    /**
     * {@inheritdoc}
     */
    public static function getSubscribedEvents()
    {
        return [
            //PluginEvents::COMMAND => 'onCommand',
        ];
    }

    public function deactivate(Composer $composer, IOInterface $io)
    {
        // TODO: Implement deactivate() method.
    }

    public function uninstall(Composer $composer, IOInterface $io)
    {
        // TODO: Implement uninstall() method.
    }
}
