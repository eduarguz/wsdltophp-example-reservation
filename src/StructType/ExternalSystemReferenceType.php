<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ExternalSystemReferenceType StructType
 * @subpackage Structs
 */
class ExternalSystemReferenceType extends AbstractStructBase
{
    /**
     * The ID
     * Meta informations extracted from the WSDL
     * - documentation: hold reference ID
     * @var string
     */
    public $ID;
    /**
     * The Source
     * Meta informations extracted from the WSDL
     * - documentation: Hold information of the source of this reference ID
     * @var string
     */
    public $Source;
    /**
     * Constructor method for ExternalSystemReferenceType
     * @uses ExternalSystemReferenceType::setID()
     * @uses ExternalSystemReferenceType::setSource()
     * @param string $iD
     * @param string $source
     */
    public function __construct($iD = null, $source = null)
    {
        $this
            ->setID($iD)
            ->setSource($source);
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
     * @return \Sabre\UpdateReservation\StructType\ExternalSystemReferenceType
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
     * @return \Sabre\UpdateReservation\StructType\ExternalSystemReferenceType
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
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\ExternalSystemReferenceType
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
