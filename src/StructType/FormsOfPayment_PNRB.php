<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FormsOfPayment.PNRB StructType
 * Meta informations extracted from the WSDL
 * - documentation: There should only be one form of payment. However, if there are more than one then the first one will be used by the host. The exception to that rule is if there is a credit card FOP present then it will be used no matter when it is
 * entered.
 * @subpackage Structs
 */
class FormsOfPayment_PNRB extends AbstractStructBase
{
    /**
     * The CreditCardPayment
     * Meta informations extracted from the WSDL
     * - documentation: CC payment
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\CreditCardPayment_PNRB[]
     */
    public $CreditCardPayment;
    /**
     * The CashPayment
     * Meta informations extracted from the WSDL
     * - documentation: Cash payment
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\Payment_PNRB
     */
    public $CashPayment;
    /**
     * The CheckPayment
     * Meta informations extracted from the WSDL
     * - documentation: Check payment
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\Payment_PNRB
     */
    public $CheckPayment;
    /**
     * The OtherPayment
     * Meta informations extracted from the WSDL
     * - documentation: Other payment
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\OtherPayment_PNRB[]
     */
    public $OtherPayment;
    /**
     * The BNumberPayment
     * Meta informations extracted from the WSDL
     * - documentation: BNumber payment
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\BNumberPayment_PNRB
     */
    public $BNumberPayment;
    /**
     * The GTRPayment
     * Meta informations extracted from the WSDL
     * - documentation: GTR payment
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\GTRPayment_PNRB
     */
    public $GTRPayment;
    /**
     * Constructor method for FormsOfPayment.PNRB
     * @uses FormsOfPayment_PNRB::setCreditCardPayment()
     * @uses FormsOfPayment_PNRB::setCashPayment()
     * @uses FormsOfPayment_PNRB::setCheckPayment()
     * @uses FormsOfPayment_PNRB::setOtherPayment()
     * @uses FormsOfPayment_PNRB::setBNumberPayment()
     * @uses FormsOfPayment_PNRB::setGTRPayment()
     * @param \Sabre\UpdateReservation\StructType\CreditCardPayment_PNRB[] $creditCardPayment
     * @param \Sabre\UpdateReservation\StructType\Payment_PNRB $cashPayment
     * @param \Sabre\UpdateReservation\StructType\Payment_PNRB $checkPayment
     * @param \Sabre\UpdateReservation\StructType\OtherPayment_PNRB[] $otherPayment
     * @param \Sabre\UpdateReservation\StructType\BNumberPayment_PNRB $bNumberPayment
     * @param \Sabre\UpdateReservation\StructType\GTRPayment_PNRB $gTRPayment
     */
    public function __construct(array $creditCardPayment = array(), \Sabre\UpdateReservation\StructType\Payment_PNRB $cashPayment = null, \Sabre\UpdateReservation\StructType\Payment_PNRB $checkPayment = null, array $otherPayment = array(), \Sabre\UpdateReservation\StructType\BNumberPayment_PNRB $bNumberPayment = null, \Sabre\UpdateReservation\StructType\GTRPayment_PNRB $gTRPayment = null)
    {
        $this
            ->setCreditCardPayment($creditCardPayment)
            ->setCashPayment($cashPayment)
            ->setCheckPayment($checkPayment)
            ->setOtherPayment($otherPayment)
            ->setBNumberPayment($bNumberPayment)
            ->setGTRPayment($gTRPayment);
    }
    /**
     * Get CreditCardPayment value
     * @return \Sabre\UpdateReservation\StructType\CreditCardPayment_PNRB[]|null
     */
    public function getCreditCardPayment()
    {
        return $this->CreditCardPayment;
    }
    /**
     * Set CreditCardPayment value
     * @throws \InvalidArgumentException
     * @param \Sabre\UpdateReservation\StructType\CreditCardPayment_PNRB[] $creditCardPayment
     * @return \Sabre\UpdateReservation\StructType\FormsOfPayment_PNRB
     */
    public function setCreditCardPayment(array $creditCardPayment = array())
    {
        foreach ($creditCardPayment as $formsOfPayment_PNRBCreditCardPaymentItem) {
            // validation for constraint: itemType
            if (!$formsOfPayment_PNRBCreditCardPaymentItem instanceof \Sabre\UpdateReservation\StructType\CreditCardPayment_PNRB) {
                throw new \InvalidArgumentException(sprintf('The CreditCardPayment property can only contain items of \Sabre\UpdateReservation\StructType\CreditCardPayment_PNRB, "%s" given', is_object($formsOfPayment_PNRBCreditCardPaymentItem) ? get_class($formsOfPayment_PNRBCreditCardPaymentItem) : gettype($formsOfPayment_PNRBCreditCardPaymentItem)), __LINE__);
            }
        }
        $this->CreditCardPayment = $creditCardPayment;
        return $this;
    }
    /**
     * Add item to CreditCardPayment value
     * @throws \InvalidArgumentException
     * @param \Sabre\UpdateReservation\StructType\CreditCardPayment_PNRB $item
     * @return \Sabre\UpdateReservation\StructType\FormsOfPayment_PNRB
     */
    public function addToCreditCardPayment(\Sabre\UpdateReservation\StructType\CreditCardPayment_PNRB $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Sabre\UpdateReservation\StructType\CreditCardPayment_PNRB) {
            throw new \InvalidArgumentException(sprintf('The CreditCardPayment property can only contain items of \Sabre\UpdateReservation\StructType\CreditCardPayment_PNRB, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->CreditCardPayment[] = $item;
        return $this;
    }
    /**
     * Get CashPayment value
     * @return \Sabre\UpdateReservation\StructType\Payment_PNRB|null
     */
    public function getCashPayment()
    {
        return $this->CashPayment;
    }
    /**
     * Set CashPayment value
     * @param \Sabre\UpdateReservation\StructType\Payment_PNRB $cashPayment
     * @return \Sabre\UpdateReservation\StructType\FormsOfPayment_PNRB
     */
    public function setCashPayment(\Sabre\UpdateReservation\StructType\Payment_PNRB $cashPayment = null)
    {
        $this->CashPayment = $cashPayment;
        return $this;
    }
    /**
     * Get CheckPayment value
     * @return \Sabre\UpdateReservation\StructType\Payment_PNRB|null
     */
    public function getCheckPayment()
    {
        return $this->CheckPayment;
    }
    /**
     * Set CheckPayment value
     * @param \Sabre\UpdateReservation\StructType\Payment_PNRB $checkPayment
     * @return \Sabre\UpdateReservation\StructType\FormsOfPayment_PNRB
     */
    public function setCheckPayment(\Sabre\UpdateReservation\StructType\Payment_PNRB $checkPayment = null)
    {
        $this->CheckPayment = $checkPayment;
        return $this;
    }
    /**
     * Get OtherPayment value
     * @return \Sabre\UpdateReservation\StructType\OtherPayment_PNRB[]|null
     */
    public function getOtherPayment()
    {
        return $this->OtherPayment;
    }
    /**
     * Set OtherPayment value
     * @throws \InvalidArgumentException
     * @param \Sabre\UpdateReservation\StructType\OtherPayment_PNRB[] $otherPayment
     * @return \Sabre\UpdateReservation\StructType\FormsOfPayment_PNRB
     */
    public function setOtherPayment(array $otherPayment = array())
    {
        foreach ($otherPayment as $formsOfPayment_PNRBOtherPaymentItem) {
            // validation for constraint: itemType
            if (!$formsOfPayment_PNRBOtherPaymentItem instanceof \Sabre\UpdateReservation\StructType\OtherPayment_PNRB) {
                throw new \InvalidArgumentException(sprintf('The OtherPayment property can only contain items of \Sabre\UpdateReservation\StructType\OtherPayment_PNRB, "%s" given', is_object($formsOfPayment_PNRBOtherPaymentItem) ? get_class($formsOfPayment_PNRBOtherPaymentItem) : gettype($formsOfPayment_PNRBOtherPaymentItem)), __LINE__);
            }
        }
        $this->OtherPayment = $otherPayment;
        return $this;
    }
    /**
     * Add item to OtherPayment value
     * @throws \InvalidArgumentException
     * @param \Sabre\UpdateReservation\StructType\OtherPayment_PNRB $item
     * @return \Sabre\UpdateReservation\StructType\FormsOfPayment_PNRB
     */
    public function addToOtherPayment(\Sabre\UpdateReservation\StructType\OtherPayment_PNRB $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Sabre\UpdateReservation\StructType\OtherPayment_PNRB) {
            throw new \InvalidArgumentException(sprintf('The OtherPayment property can only contain items of \Sabre\UpdateReservation\StructType\OtherPayment_PNRB, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->OtherPayment[] = $item;
        return $this;
    }
    /**
     * Get BNumberPayment value
     * @return \Sabre\UpdateReservation\StructType\BNumberPayment_PNRB|null
     */
    public function getBNumberPayment()
    {
        return $this->BNumberPayment;
    }
    /**
     * Set BNumberPayment value
     * @param \Sabre\UpdateReservation\StructType\BNumberPayment_PNRB $bNumberPayment
     * @return \Sabre\UpdateReservation\StructType\FormsOfPayment_PNRB
     */
    public function setBNumberPayment(\Sabre\UpdateReservation\StructType\BNumberPayment_PNRB $bNumberPayment = null)
    {
        $this->BNumberPayment = $bNumberPayment;
        return $this;
    }
    /**
     * Get GTRPayment value
     * @return \Sabre\UpdateReservation\StructType\GTRPayment_PNRB|null
     */
    public function getGTRPayment()
    {
        return $this->GTRPayment;
    }
    /**
     * Set GTRPayment value
     * @param \Sabre\UpdateReservation\StructType\GTRPayment_PNRB $gTRPayment
     * @return \Sabre\UpdateReservation\StructType\FormsOfPayment_PNRB
     */
    public function setGTRPayment(\Sabre\UpdateReservation\StructType\GTRPayment_PNRB $gTRPayment = null)
    {
        $this->GTRPayment = $gTRPayment;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\FormsOfPayment_PNRB
     */
    public static function __set_state(array $array)
    {
        return parent::__set_state($array);
    }
    /**
     * Method returning the class name
     * @return string __CLASS__
     */
    public function __toString()
    {
        return __CLASS__;
    }
}
