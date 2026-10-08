<?php

declare(strict_types=1);

namespace OpenDxp\Bundle\EcommerceFrameworkBundle\Tests\Application;

use OpenDxp\Bundle\EcommerceFrameworkBundle\OpenDxpEcommerceFrameworkBundle;
use OpenDxp\Bundle\EcommerceFrameworkBundle\OpenDxpPaymentProviderUnzerBundle;
use OpenDxp\HttpKernel\BundleCollection\BundleCollection;
use OpenDxp\TestFoundation\Kernel\TestKernel as Foundation;

final class TestKernel extends Foundation
{
    public function registerBundlesToCollection(BundleCollection $collection): void
    {
        $collection->addBundle(new OpenDxpEcommerceFrameworkBundle(), 0);
        $collection->addBundle(new OpenDxpPaymentProviderUnzerBundle());
    }
}
