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
        list($vendor, $name) = explode('/', $package->getName());

        return 'addons/' . $vendor . '/' . $name;
    }

    /**
     * {@inheritDoc}
     */
    public function supports($packageType)
    {
        return 'hourglass-addon' === $packageType;
    }
}