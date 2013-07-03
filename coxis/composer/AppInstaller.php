<?php
namespace Coxis\Composer;

use Composer\Package\PackageInterface;
use Composer\Installer\LibraryInstaller;

class AppInstaller extends LibraryInstaller
{
    /**
     * {@inheritDoc}
     */
    public function getInstallPath(PackageInterface $package)
    {
        return 'app/'.basename(substr($package->getPrettyName(), 0, 23));
    }

    /**
     * {@inheritDoc}
     */
    public function supports($packageType)
    {
        return $packageType === 'coxis-app';
    }
}

//aaa