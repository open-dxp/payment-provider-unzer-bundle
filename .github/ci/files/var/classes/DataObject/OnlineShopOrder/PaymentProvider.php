<?php

namespace OpenDxp\Model\DataObject\OnlineShopOrder;

use OpenDxp\Model\DataObject\Exception\InheritanceParentNotFoundException;

class PaymentProvider extends \OpenDxp\Model\DataObject\Objectbrick {

protected $brickGetters = ['PaymentProviderUnzer'];


protected \OpenDxp\Model\DataObject\Objectbrick\Data\PaymentProviderPayPalSmartButton|null $PaymentProviderPayPalSmartButton = null;

/**
* @return \OpenDxp\Model\DataObject\Objectbrick\Data\PaymentProviderPayPalSmartButton|null
*/
public function getPaymentProviderPayPalSmartButton(bool $includeDeletedBricks = false)
{
	if(!$includeDeletedBricks &&
		isset($this->PaymentProviderPayPalSmartButton) &&
		$this->PaymentProviderPayPalSmartButton->getDoDelete()) {
			return null;
	}
	return $this->PaymentProviderPayPalSmartButton;
}

/**
* @param \OpenDxp\Model\DataObject\Objectbrick\Data\PaymentProviderPayPalSmartButton|null $PaymentProviderPayPalSmartButton
* @return $this
*/
public function setPaymentProviderPayPalSmartButton(?\OpenDxp\Model\DataObject\Objectbrick\Data\PaymentProviderPayPalSmartButton $PaymentProviderPayPalSmartButton): static
{
	$this->PaymentProviderPayPalSmartButton = $PaymentProviderPayPalSmartButton;
	return $this;
}

protected \OpenDxp\Model\DataObject\Objectbrick\Data\PaymentProviderUnzer|null $PaymentProviderUnzer = null;

/**
* @return \OpenDxp\Model\DataObject\Objectbrick\Data\PaymentProviderUnzer|null
*/
public function getPaymentProviderUnzer(bool $includeDeletedBricks = false)
{
	if(!$includeDeletedBricks &&
		isset($this->PaymentProviderUnzer) &&
		$this->PaymentProviderUnzer->getDoDelete()) {
			return null;
	}
	return $this->PaymentProviderUnzer;
}

/**
* @param \OpenDxp\Model\DataObject\Objectbrick\Data\PaymentProviderUnzer|null $PaymentProviderUnzer
* @return $this
*/
public function setPaymentProviderUnzer(?\OpenDxp\Model\DataObject\Objectbrick\Data\PaymentProviderUnzer $PaymentProviderUnzer): static
{
	$this->PaymentProviderUnzer = $PaymentProviderUnzer;
	return $this;
}

}

