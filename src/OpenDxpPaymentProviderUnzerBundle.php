<?php
declare(strict_types=1);

/**
 * Pimcore
 *
 * This source file is available under two different licenses:
 * - GNU General Public License version 3 (GPLv3)
 * - Pimcore Commercial License (PCL)
 * Full copyright and license information is available in
 * LICENSE.md which is distributed with this source code.
 *
 *  @copyright  Copyright (c) Pimcore GmbH (http://www.pimcore.org)
 *  @license    http://www.pimcore.org/license     GPLv3 and PCL
 */

namespace OpenDxp\Bundle\EcommerceFrameworkBundle;

use OpenDxp\Bundle\EcommerceFrameworkBundle\DependencyInjection\OpenDxpPaymentProviderUnzerExtension;
use OpenDxp\Bundle\EcommerceFrameworkBundle\Unzer\Installer;
use OpenDxp\Extension\Bundle\AbstractOpenDxpBundle;
use OpenDxp\Extension\Bundle\Traits\PackageVersionTrait;
use Symfony\Component\DependencyInjection\Extension\ExtensionInterface;

class OpenDxpPaymentProviderUnzerBundle extends AbstractOpenDxpBundle
{
    use PackageVersionTrait;

    public function getContainerExtension(): ?ExtensionInterface
    {
        if ($this->extension === null) {
            $this->extension = new OpenDxpPaymentProviderUnzerExtension();
        }

        return $this->extension;
    }

    /**
     * {@inheritdoc}
     */
    protected function getComposerPackageName(): string
    {
        return 'open-dxp/payment-provider-unzer-bundle';
    }

    /**
     * @return Installer
     */
    public function getInstaller(): Installer
    {
        /** @var Installer $installer */
        $installer = $this->container->get(Installer::class);

        return $installer;
    }
}
