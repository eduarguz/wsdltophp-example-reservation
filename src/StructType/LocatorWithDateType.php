<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for LocatorWithDateType StructType
 * Meta informations extracted from the WSDL
 * - documentation: PNR identifier containing information about locator and pnr creation date.
 * @subpackage Structs
 */
class LocatorWithDateType extends AbstractStructBase
{
    /**
     * The Locator
     * Meta informations extracted from the WSDL
     * - minOccurs: 1
     * - pattern: [A-Z]{6}
     * @var string
     */
    public $Locator;
    /**
     * The CreateDate
     * Meta informations extracted from the WSDL
     * - minOccurs: 1
     * @var string
     */
    public $CreateDate;
    /**
     * Constructor method for LocatorWithDateType
     * @uses LocatorWithDateType::setLocator()
     * @uses LocatorWithDateType::setCreateDate()
     * @param string $locator
     * @param string $createDate
     */
    public function __construct($locator = null, $createDate = null)
    {
        $this
            ->setLocator($locator)
            ->setCreateDate($createDate);
    }
    /**
     * Get Locator value
     * @return string
     */
    public function getLocator()
    {
        return $this->Locator;
    }
    /**
     * Set Locator value
     * @param string $locator
     * @return \Sabre\UpdateReservation\StructType\LocatorWithDateType
     */
    public function setLocator($locator = null)
    {
        // validation for constraint: pattern
        if (is_scalar($locator) && !preg_match('/[A-Z]{6}/', $locator)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a scalar value that matches "[A-Z]{6}", "%s" given', var_export($locator, true)), __LINE__);
        }
        // validation for constraint: string
        if (!is_null($locator) && !is_string($locator)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($locator)), __LINE__);
        }
        $this->Locator = $locator;
        return $this;
    }
    /**
     * Get CreateDate value
     * @return string
     */
    public function getCreateDate()
    {
        return $this->CreateDate;
    }
    /**
     * Set CreateDate value
     * @param string $createDate
     * @return \Sabre\UpdateReservation\StructType\LocatorWithDateType
     */
    public function setCreateDate($createDate = null)
    {
        // validation for constraint: string
        if (!is_null($createDate) && !is_string($createDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($createDate)), __LINE__);
        }
        $this->CreateDate = $createDate;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\LocatorWithDateType
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
