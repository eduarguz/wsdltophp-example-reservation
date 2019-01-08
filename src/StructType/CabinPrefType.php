<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CabinPrefType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Indicates preferences for choice of airline cabin for a given travel situation.
 * @subpackage Structs
 */
class CabinPrefType extends AbstractStructBase
{
    /**
     * The preferLevel
     * Meta informations extracted from the WSDL
     * - default: Preferred
     * - documentation: Used to indicate a level of preference for an associate item, only, unacceptable, preferred.
     * @var string
     */
    public $preferLevel;
    /**
     * The cabin
     * Meta informations extracted from the WSDL
     * - documentation: Specify cabin type.
     * @var string
     */
    public $cabin;
    /**
     * Constructor method for CabinPrefType
     * @uses CabinPrefType::setPreferLevel()
     * @uses CabinPrefType::setCabin()
     * @param string $preferLevel
     * @param string $cabin
     */
    public function __construct($preferLevel = 'Preferred', $cabin = null)
    {
        $this
            ->setPreferLevel($preferLevel)
            ->setCabin($cabin);
    }
    /**
     * Get preferLevel value
     * @return string|null
     */
    public function getPreferLevel()
    {
        return $this->preferLevel;
    }
    /**
     * Set preferLevel value
     * @uses \Sabre\UpdateReservation\EnumType\PreferLevelType::valueIsValid()
     * @uses \Sabre\UpdateReservation\EnumType\PreferLevelType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $preferLevel
     * @return \Sabre\UpdateReservation\StructType\CabinPrefType
     */
    public function setPreferLevel($preferLevel = 'Preferred')
    {
        // validation for constraint: enumeration
        if (!\Sabre\UpdateReservation\EnumType\PreferLevelType::valueIsValid($preferLevel)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $preferLevel, implode(', ', \Sabre\UpdateReservation\EnumType\PreferLevelType::getValidValues())), __LINE__);
        }
        $this->preferLevel = $preferLevel;
        return $this;
    }
    /**
     * Get cabin value
     * @return string|null
     */
    public function getCabin()
    {
        return $this->cabin;
    }
    /**
     * Set cabin value
     * @uses \Sabre\UpdateReservation\EnumType\CabinNameType::valueIsValid()
     * @uses \Sabre\UpdateReservation\EnumType\CabinNameType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $cabin
     * @return \Sabre\UpdateReservation\StructType\CabinPrefType
     */
    public function setCabin($cabin = null)
    {
        // validation for constraint: enumeration
        if (!\Sabre\UpdateReservation\EnumType\CabinNameType::valueIsValid($cabin)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $cabin, implode(', ', \Sabre\UpdateReservation\EnumType\CabinNameType::getValidValues())), __LINE__);
        }
        $this->cabin = $cabin;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\CabinPrefType
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
