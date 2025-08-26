<?php
namespace Codecodeio\StandWithUkraine;

use Composer\Plugin\PluginInterface;
use Composer\Composer;
use Composer\IO\IOInterface;
use Composer\EventDispatcher\EventSubscriberInterface;
use Composer\Script\Event;

class Plugin implements PluginInterface, EventSubscriberInterface
{
    public function deactivate(Composer $composer, IOInterface $io) {}

    public function uninstall(Composer $composer, IOInterface $io) {}

    public function activate(Composer $composer, IOInterface $io)
    {
        // No activation logic needed
    }

    public static function getSubscribedEvents()
    {
        return [
            'post-install-cmd' => 'showMessage',
            'post-update-cmd' => 'showMessage',
        ];
    }

    public static function showMessage(Event $event)
    {
        StandWithUkraine::showMessage();
    }
}
