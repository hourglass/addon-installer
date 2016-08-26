<?php

namespace Hourglass\Composer;

use Composer\Composer;
use Composer\IO\IOInterface;
use Composer\Plugin\PluginInterface;

class AddonInstallerPlugin implements PluginInterface
{
    /**
     * Apply plugin modifications to Composer
     *
     * @param Composer    $composer
     * @param IOInterface $io
     */
    public function activate(Composer $composer, IOInterface $io)
    {
        $installer = new AddonInstaller($io, $composer);
        $composer->getInstallationManager()->addInstaller($installer);
    }
}