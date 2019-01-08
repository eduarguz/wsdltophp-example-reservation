<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Deal StructType
 * Meta informations extracted from the WSDL
 * - documentation: Information about applied discount/markup for this ancillary | Information about applied discount/markup for this ancillary
 * @subpackage Structs
 */
class Deal extends AbstractStructBase
{
    /**
     * The type
     * Meta informations extracted from the WSDL
     * - use: required
     * @var string
     */
    public $type;
    /**
     * The Percentage
     * Meta informations extracted from the WSDL
     * - documentation: Percentage as defined in RULE for percentage discounts/markups | Percentage as defined in RULE for percentage discounts/markups
     * - minOccurs: 0
     * @var float
     */
    public $Percentage;
    /**
     * The Amount
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\Amount
     */
    public $Amount;
    /**
     * Constructor method for Deal
     * @uses Deal::setType()
     * @uses Deal::setPercentage()
     * @uses Deal::setAmount()
     * @param string $type
     * @param float $percentage
     * @param \Sabre\UpdateReservation\StructType\Amount $amount
     */
    public function __construct($type = null, $percentage = null, \Sabre\UpdateReservation\StructType\Amount $amount = null)
    {
        $this
            ->setType($type)
            ->setPercentage($percentage)
            ->setAmount($amount);
    }
    /**
     * Get type value
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }
    /**
     * Set type value
     * @param string $type
     * @return \Sabre\UpdateReservation\StructType\Deal
     */
    public function setType($type = null)
    {
        // validation for constraint: string
        if (!is_null($type) && !is_string($type)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($type)), __LINE__);
        }
        $this->type = $type;
        return $this;
    }
    /**
     * Get Percentage value
     * @return float|null
     */
    public function getPercentage()
    {
        return $this->Percentage;
    }
    /**
     * Set Percentage value
     * @param float $percentage
     * @return \Sabre\UpdateReservation\StructType\Deal
     */
    public function setPercentage($percentage = null)
    {
        $this->Percentage = $percentage;
        return $this;
    }
    /**
     * Get Amount value
     * @return \Sabre\UpdateReservation\StructType\Amount|null
     */
    public function getAmount()
    {
        return $this->Amount;
    }
    /**
     * Set Amount value
     * @param \Sabre\UpdateReservation\StructType\Amount $amount
     * @return \Sabre\UpdateReservation\StructType\Deal
     */
    public function setAmount(\Sabre\UpdateReservation\StructType\Amount $amount = null)
    {
        $this->Amount = $amount;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\Deal
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
