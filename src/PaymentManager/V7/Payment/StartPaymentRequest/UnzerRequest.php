<?php
declare(strict_types=1);

/**
 * OpenDXP
 *
 * This source file is licensed under the GNU General Public License version 3 (GPLv3).
 *
 * Full copyright and license information is available in
 * LICENSE.md which is distributed with this source code.
 *
 * @copyright  Copyright (c) Pimcore GmbH (https://pimcore.com)
 * @copyright  Modification Copyright (c) OpenDXP (https://www.opendxp.io)
 * @license    https://www.gnu.org/licenses/gpl-3.0.html  GNU General Public License version 3 (GPLv3)
 */

namespace OpenDxp\Bundle\EcommerceFrameworkBundle\PaymentManager\V7\Payment\StartPaymentRequest;

class UnzerRequest extends AbstractRequest
{
    protected string | null $paymentReference = null;

    protected string | null $internalPaymentId = null;

    protected string $returnUrl;

    protected string $errorUrl;

    public function getPaymentReference(): ?string
    {
        return $this->paymentReference;
    }

    public function setPaymentReference(?string $paymentReference): void
    {
        $this->paymentReference = $paymentReference;
    }

    public function getInternalPaymentId(): ?string
    {
        return $this->internalPaymentId;
    }

    public function setInternalPaymentId(?string $internalPaymentId): void
    {
        $this->internalPaymentId = $internalPaymentId;
    }

    public function getReturnUrl(): string
    {
        return $this->returnUrl;
    }

    public function setReturnUrl(string $returnUrl): void
    {
        $this->returnUrl = $returnUrl;
    }

    public function getErrorUrl(): string
    {
        return $this->errorUrl;
    }

    public function setErrorUrl(string $errorUrl): void
    {
        $this->errorUrl = $errorUrl;
    }
}

class_alias(UnzerRequest::class, 'OpenDxp\Bundle\EcommerceFrameworkBundle\PaymentManager\V7\Payment\StartPaymentRequest\HeidelpayRequest');
