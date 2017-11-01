<?php namespace fed\EwmaModuleInstaller;

use Composer\Package\PackageInterface;
use Composer\Installer\LibraryInstaller;

class EwmaModuleInstaller extends LibraryInstaller
{
    /**
     * {@inheritDoc}
     */
    public function getInstallPath(PackageInterface $package)
    {
        $package->getName();

        return 'modules-vendor/' . $package->getName();
    }

    /**
     * {@inheritDoc}
     */
    public function supports($packageType)
    {
        return 'ewma-module' === $packageType;
    }
}
