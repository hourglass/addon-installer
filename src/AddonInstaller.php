<?php

namespace Hourglass\Composer;

use Composer\Package\PackageInterface;
use Composer\Installer\LibraryInstaller;

class AddonInstaller extends LibraryInstaller
{
    /**
     * {@inheritDoc}
     */
    public function getInstallPath(PackageInterface $package)
    {
        return 'addons/' . $package->getPrettyName();
    }

    /**
     * {@inheritDoc}
     */
    public function supports($packageType)
    {
        return 'hourglass-addon' === $packageType;
    }
}