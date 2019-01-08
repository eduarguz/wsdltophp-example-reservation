<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CalculationType StructType
 * @subpackage Structs
 */
class CalculationType extends AbstractStructBase
{
    /**
     * The UnitName
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $UnitName;
    /**
     * The UnitCharge
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\MinMaxType
     */
    public $UnitCharge;
    /**
     * The Quantity
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\MinMaxType
     */
    public $Quantity;
    /**
     * The Total
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\MinMaxType
     */
    public $Total;
    /**
     * Constructor method for CalculationType
     * @uses CalculationType::setUnitName()
     * @uses CalculationType::setUnitCharge()
     * @uses CalculationType::setQuantity()
     * @uses CalculationType::setTotal()
     * @param string $unitName
     * @param \Sabre\UpdateReservation\StructType\MinMaxType $unitCharge
     * @param \Sabre\UpdateReservation\StructType\MinMaxType $quantity
     * @param \Sabre\UpdateReservation\StructType\MinMaxType $total
     */
    public function __construct($unitName = null, \Sabre\UpdateReservation\StructType\MinMaxType $unitCharge = null, \Sabre\UpdateReservation\StructType\MinMaxType $quantity = null, \Sabre\UpdateReservation\StructType\MinMaxType $total = null)
    {
        $this
            ->setUnitName($unitName)
            ->setUnitCharge($unitCharge)
            ->setQuantity($quantity)
            ->setTotal($total);
    }
    /**
     * Get UnitName value
     * @return string|null
     */
    public function getUnitName()
    {
        return $this->UnitName;
    }
    /**
     * Set UnitName value
     * @param string $unitName
     * @return \Sabre\UpdateReservation\StructType\CalculationType
     */
    public function setUnitName($unitName = null)
    {
        // validation for constraint: string
        if (!is_null($unitName) && !is_string($unitName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($unitName)), __LINE__);
        }
        $this->UnitName = $unitName;
        return $this;
    }
    /**
     * Get UnitCharge value
     * @return \Sabre\UpdateReservation\StructType\MinMaxType|null
     */
    public function getUnitCharge()
    {
        return $this->UnitCharge;
    }
    /**
     * Set UnitCharge value
     * @param \Sabre\UpdateReservation\StructType\MinMaxType $unitCharge
     * @return \Sabre\UpdateReservation\StructType\CalculationType
     */
    public function setUnitCharge(\Sabre\UpdateReservation\StructType\MinMaxType $unitCharge = null)
    {
        $this->UnitCharge = $unitCharge;
        return $this;
    }
    /**
     * Get Quantity value
     * @return \Sabre\UpdateReservation\StructType\MinMaxType|null
     */
    public function getQuantity()
    {
        return $this->Quantity;
    }
    /**
     * Set Quantity value
     * @param \Sabre\UpdateReservation\StructType\MinMaxType $quantity
     * @return \Sabre\UpdateReservation\StructType\CalculationType
     */
    public function setQuantity(\Sabre\UpdateReservation\StructType\MinMaxType $quantity = null)
    {
        $this->Quantity = $quantity;
        return $this;
    }
    /**
     * Get Total value
     * @return \Sabre\UpdateReservation\StructType\MinMaxType|null
     */
    public function getTotal()
    {
        return $this->Total;
    }
    /**
     * Set Total value
     * @param \Sabre\UpdateReservation\StructType\MinMaxType $total
     * @return \Sabre\UpdateReservation\StructType\CalculationType
     */
    public function setTotal(\Sabre\UpdateReservation\StructType\MinMaxType $total = null)
    {
        $this->Total = $total;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\CalculationType
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
