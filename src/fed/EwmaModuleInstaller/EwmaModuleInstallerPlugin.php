<?php namespace fed\EwmaModuleInstaller;

use Composer\Composer;
use Composer\IO\IOInterface;
use Composer\Plugin\PluginInterface;

class EwmaModuleInstallerPlugin implements PluginInterface
{
    public function activate(Composer $composer, IOInterface $io)
    {
        $installer = new EwmaModuleInstaller($io, $composer);

        $composer->getInstallationManager()->addInstaller($installer);
    }
}
