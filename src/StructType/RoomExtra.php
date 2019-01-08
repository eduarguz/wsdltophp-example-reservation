<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RoomExtra StructType
 * Meta informations extracted from the WSDL
 * - documentation: For adding extras to a Room
 * @subpackage Structs
 */
class RoomExtra extends AbstractStructBase
{
    /**
     * The Type
     * Meta informations extracted from the WSDL
     * - documentation: Uses RMA OTA Table. Only 3 supported CRIB/Rollaway bed/Extra person | Positive Integer to denote OTA Codes
     * - use: required
     * - minInclusive: 1
     * @var int
     */
    public $Type;
    /**
     * The Quantity
     * Meta informations extracted from the WSDL
     * - use: optional
     * @var string
     */
    public $Quantity;
    /**
     * The Amount
     * Meta informations extracted from the WSDL
     * - use: optional
     * - documentation: Used for currency Amount
     * - fractionDigits: 2
     * @var float
     */
    public $Amount;
    /**
     * Constructor method for RoomExtra
     * @uses RoomExtra::setType()
     * @uses RoomExtra::setQuantity()
     * @uses RoomExtra::setAmount()
     * @param int $type
     * @param string $quantity
     * @param float $amount
     */
    public function __construct($type = null, $quantity = null, $amount = null)
    {
        $this
            ->setType($type)
            ->setQuantity($quantity)
            ->setAmount($amount);
    }
    /**
     * Get Type value
     * @return int
     */
    public function getType()
    {
        return $this->Type;
    }
    /**
     * Set Type value
     * @param int $type
     * @return \Sabre\UpdateReservation\StructType\RoomExtra
     */
    public function setType($type = null)
    {
        // validation for constraint: minInclusive
        if ($type < 1) {
            throw new \InvalidArgumentException(sprintf('Invalid value, the value must be superior or equal to 1, "%s" given', $type), __LINE__);
        }
        // validation for constraint: int
        if (!is_null($type) && !is_numeric($type)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($type)), __LINE__);
        }
        $this->Type = $type;
        return $this;
    }
    /**
     * Get Quantity value
     * @return string|null
     */
    public function getQuantity()
    {
        return $this->Quantity;
    }
    /**
     * Set Quantity value
     * @param string $quantity
     * @return \Sabre\UpdateReservation\StructType\RoomExtra
     */
    public function setQuantity($quantity = null)
    {
        // validation for constraint: string
        if (!is_null($quantity) && !is_string($quantity)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($quantity)), __LINE__);
        }
        $this->Quantity = $quantity;
        return $this;
    }
    /**
     * Get Amount value
     * @return float|null
     */
    public function getAmount()
    {
        return $this->Amount;
    }
    /**
     * Set Amount value
     * @param float $amount
     * @return \Sabre\UpdateReservation\StructType\RoomExtra
     */
    public function setAmount($amount = null)
    {
        // validation for constraint: fractionDigits
        if (is_float($amount) && strlen(substr($amount, strpos($amount, '.') + 1)) !== 2) {
            throw new \InvalidArgumentException(sprintf('Invalid value, the value must at most contain 2 fraction digits, "%d" given', strlen(substr($amount, strpos($amount, '.') + 1))), __LINE__);
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
     * @return \Sabre\UpdateReservation\StructType\RoomExtra
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
