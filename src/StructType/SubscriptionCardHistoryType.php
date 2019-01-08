<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SubscriptionCardHistoryType StructType
 * @subpackage Structs
 */
class SubscriptionCardHistoryType extends AbstractStructBase
{
    /**
     * The HistoryAction
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $HistoryAction;
    /**
     * The CardNumber
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $CardNumber;
    /**
     * The FreeText
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $FreeText;
    /**
     * The SubscriptionCardBasic
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\SubscriptionCardBasicHistoryType
     */
    public $SubscriptionCardBasic;
    /**
     * The SubscriptionCardSegment
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\SubscriptionCardSegmentHistoryType
     */
    public $SubscriptionCardSegment;
    /**
     * Constructor method for SubscriptionCardHistoryType
     * @uses SubscriptionCardHistoryType::setHistoryAction()
     * @uses SubscriptionCardHistoryType::setCardNumber()
     * @uses SubscriptionCardHistoryType::setFreeText()
     * @uses SubscriptionCardHistoryType::setSubscriptionCardBasic()
     * @uses SubscriptionCardHistoryType::setSubscriptionCardSegment()
     * @param string $historyAction
     * @param string $cardNumber
     * @param string $freeText
     * @param \Sabre\UpdateReservation\StructType\SubscriptionCardBasicHistoryType $subscriptionCardBasic
     * @param \Sabre\UpdateReservation\StructType\SubscriptionCardSegmentHistoryType $subscriptionCardSegment
     */
    public function __construct($historyAction = null, $cardNumber = null, $freeText = null, \Sabre\UpdateReservation\StructType\SubscriptionCardBasicHistoryType $subscriptionCardBasic = null, \Sabre\UpdateReservation\StructType\SubscriptionCardSegmentHistoryType $subscriptionCardSegment = null)
    {
        $this
            ->setHistoryAction($historyAction)
            ->setCardNumber($cardNumber)
            ->setFreeText($freeText)
            ->setSubscriptionCardBasic($subscriptionCardBasic)
            ->setSubscriptionCardSegment($subscriptionCardSegment);
    }
    /**
     * Get HistoryAction value
     * @return string|null
     */
    public function getHistoryAction()
    {
        return $this->HistoryAction;
    }
    /**
     * Set HistoryAction value
     * @param string $historyAction
     * @return \Sabre\UpdateReservation\StructType\SubscriptionCardHistoryType
     */
    public function setHistoryAction($historyAction = null)
    {
        // validation for constraint: string
        if (!is_null($historyAction) && !is_string($historyAction)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($historyAction)), __LINE__);
        }
        $this->HistoryAction = $historyAction;
        return $this;
    }
    /**
     * Get CardNumber value
     * @return string|null
     */
    public function getCardNumber()
    {
        return $this->CardNumber;
    }
    /**
     * Set CardNumber value
     * @param string $cardNumber
     * @return \Sabre\UpdateReservation\StructType\SubscriptionCardHistoryType
     */
    public function setCardNumber($cardNumber = null)
    {
        // validation for constraint: string
        if (!is_null($cardNumber) && !is_string($cardNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($cardNumber)), __LINE__);
        }
        $this->CardNumber = $cardNumber;
        return $this;
    }
    /**
     * Get FreeText value
     * @return string|null
     */
    public function getFreeText()
    {
        return $this->FreeText;
    }
    /**
     * Set FreeText value
     * @param string $freeText
     * @return \Sabre\UpdateReservation\StructType\SubscriptionCardHistoryType
     */
    public function setFreeText($freeText = null)
    {
        // validation for constraint: string
        if (!is_null($freeText) && !is_string($freeText)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($freeText)), __LINE__);
        }
        $this->FreeText = $freeText;
        return $this;
    }
    /**
     * Get SubscriptionCardBasic value
     * @return \Sabre\UpdateReservation\StructType\SubscriptionCardBasicHistoryType|null
     */
    public function getSubscriptionCardBasic()
    {
        return $this->SubscriptionCardBasic;
    }
    /**
     * Set SubscriptionCardBasic value
     * @param \Sabre\UpdateReservation\StructType\SubscriptionCardBasicHistoryType $subscriptionCardBasic
     * @return \Sabre\UpdateReservation\StructType\SubscriptionCardHistoryType
     */
    public function setSubscriptionCardBasic(\Sabre\UpdateReservation\StructType\SubscriptionCardBasicHistoryType $subscriptionCardBasic = null)
    {
        $this->SubscriptionCardBasic = $subscriptionCardBasic;
        return $this;
    }
    /**
     * Get SubscriptionCardSegment value
     * @return \Sabre\UpdateReservation\StructType\SubscriptionCardSegmentHistoryType|null
     */
    public function getSubscriptionCardSegment()
    {
        return $this->SubscriptionCardSegment;
    }
    /**
     * Set SubscriptionCardSegment value
     * @param \Sabre\UpdateReservation\StructType\SubscriptionCardSegmentHistoryType $subscriptionCardSegment
     * @return \Sabre\UpdateReservation\StructType\SubscriptionCardHistoryType
     */
    public function setSubscriptionCardSegment(\Sabre\UpdateReservation\StructType\SubscriptionCardSegmentHistoryType $subscriptionCardSegment = null)
    {
        $this->SubscriptionCardSegment = $subscriptionCardSegment;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\SubscriptionCardHistoryType
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
