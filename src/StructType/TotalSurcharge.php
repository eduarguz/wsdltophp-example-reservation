<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TotalSurcharge StructType
 * @subpackage Structs
 */
class TotalSurcharge extends AbstractStructBase
{
    /**
     * The Surcharge
     * Meta informations extracted from the WSDL
     * - maxOccurs: 4
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\Surcharge[]
     */
    public $Surcharge;
    /**
     * The Amount
     * @var string
     */
    public $Amount;
    /**
     * Constructor method for TotalSurcharge
     * @uses TotalSurcharge::setSurcharge()
     * @uses TotalSurcharge::setAmount()
     * @param \Sabre\UpdateReservation\StructType\Surcharge[] $surcharge
     * @param string $amount
     */
    public function __construct(array $surcharge = array(), $amount = null)
    {
        $this
            ->setSurcharge($surcharge)
            ->setAmount($amount);
    }
    /**
     * Get Surcharge value
     * @return \Sabre\UpdateReservation\StructType\Surcharge[]|null
     */
    public function getSurcharge()
    {
        return $this->Surcharge;
    }
    /**
     * Set Surcharge value
     * @throws \InvalidArgumentException
     * @param \Sabre\UpdateReservation\StructType\Surcharge[] $surcharge
     * @return \Sabre\UpdateReservation\StructType\TotalSurcharge
     */
    public function setSurcharge(array $surcharge = array())
    {
        foreach ($surcharge as $totalSurchargeSurchargeItem) {
            // validation for constraint: itemType
            if (!$totalSurchargeSurchargeItem instanceof \Sabre\UpdateReservation\StructType\Surcharge) {
                throw new \InvalidArgumentException(sprintf('The Surcharge property can only contain items of \Sabre\UpdateReservation\StructType\Surcharge, "%s" given', is_object($totalSurchargeSurchargeItem) ? get_class($totalSurchargeSurchargeItem) : gettype($totalSurchargeSurchargeItem)), __LINE__);
            }
        }
        $this->Surcharge = $surcharge;
        return $this;
    }
    /**
     * Add item to Surcharge value
     * @throws \InvalidArgumentException
     * @param \Sabre\UpdateReservation\StructType\Surcharge $item
     * @return \Sabre\UpdateReservation\StructType\TotalSurcharge
     */
    public function addToSurcharge(\Sabre\UpdateReservation\StructType\Surcharge $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Sabre\UpdateReservation\StructType\Surcharge) {
            throw new \InvalidArgumentException(sprintf('The Surcharge property can only contain items of \Sabre\UpdateReservation\StructType\Surcharge, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Surcharge[] = $item;
        return $this;
    }
    /**
     * Get Amount value
     * @return string|null
     */
    public function getAmount()
    {
        return $this->Amount;
    }
    /**
     * Set Amount value
     * @param string $amount
     * @return \Sabre\UpdateReservation\StructType\TotalSurcharge
     */
    public function setAmount($amount = null)
    {
        // validation for constraint: string
        if (!is_null($amount) && !is_string($amount)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($amount)), __LINE__);
        }
        $this->Amount = $amount;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\TotalSurcharge
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
