<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for HotelUniqueIDType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Hold Hotel information that can be used as a reference to other systems
 * @subpackage Structs
 */
class HotelUniqueIDType extends AbstractStructBase
{
    /**
     * The Source
     * Meta informations extracted from the WSDL
     * - documentation: Application/System that is the source of this Hotel ID
     * @var string
     */
    public $Source;
    /**
     * The ID
     * Meta informations extracted from the WSDL
     * - documentation: Hotel ID
     * @var string
     */
    public $ID;
    /**
     * Constructor method for HotelUniqueIDType
     * @uses HotelUniqueIDType::setSource()
     * @uses HotelUniqueIDType::setID()
     * @param string $source
     * @param string $iD
     */
    public function __construct($source = null, $iD = null)
    {
        $this
            ->setSource($source)
            ->setID($iD);
    }
    /**
     * Get Source value
     * @return string|null
     */
    public function getSource()
    {
        return $this->Source;
    }
    /**
     * Set Source value
     * @param string $source
     * @return \Sabre\UpdateReservation\StructType\HotelUniqueIDType
     */
    public function setSource($source = null)
    {
        // validation for constraint: string
        if (!is_null($source) && !is_string($source)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($source)), __LINE__);
        }
        $this->Source = $source;
        return $this;
    }
    /**
     * Get ID value
     * @return string|null
     */
    public function getID()
    {
        return $this->ID;
    }
    /**
     * Set ID value
     * @param string $iD
     * @return \Sabre\UpdateReservation\StructType\HotelUniqueIDType
     */
    public function setID($iD = null)
    {
        // validation for constraint: string
        if (!is_null($iD) && !is_string($iD)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($iD)), __LINE__);
        }
        $this->ID = $iD;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\HotelUniqueIDType
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
