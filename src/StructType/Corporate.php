<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Corporate StructType
 * Meta informations extracted from the WSDL
 * - documentation: Direct Bill to Corporate
 * @subpackage Structs
 */
class Corporate extends AbstractStructBase
{
    /**
     * The CorporateId
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $CorporateId;
    /**
     * The ID
     * Meta informations extracted from the WSDL
     * - documentation: "ID" is used to return the corporate ID associated with the vehicle reservation if applicable.
     * - maxOccurs: 50
     * - minOccurs: 0
     * @var string[]
     */
    public $ID;
    /**
     * The CorporateDiscount
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $CorporateDiscount;
    /**
     * Constructor method for Corporate
     * @uses Corporate::setCorporateId()
     * @uses Corporate::setID()
     * @uses Corporate::setCorporateDiscount()
     * @param string $corporateId
     * @param string[] $iD
     * @param string $corporateDiscount
     */
    public function __construct($corporateId = null, array $iD = array(), $corporateDiscount = null)
    {
        $this
            ->setCorporateId($corporateId)
            ->setID($iD)
            ->setCorporateDiscount($corporateDiscount);
    }
    /**
     * Get CorporateId value
     * @return string
     */
    public function getCorporateId()
    {
        return $this->CorporateId;
    }
    /**
     * Set CorporateId value
     * @param string $corporateId
     * @return \Sabre\UpdateReservation\StructType\Corporate
     */
    public function setCorporateId($corporateId = null)
    {
        // validation for constraint: string
        if (!is_null($corporateId) && !is_string($corporateId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($corporateId)), __LINE__);
        }
        $this->CorporateId = $corporateId;
        return $this;
    }
    /**
     * Get ID value
     * @return string[]|null
     */
    public function getID()
    {
        return $this->ID;
    }
    /**
     * Set ID value
     * @throws \InvalidArgumentException
     * @param string[] $iD
     * @return \Sabre\UpdateReservation\StructType\Corporate
     */
    public function setID(array $iD = array())
    {
        foreach ($iD as $corporateIDItem) {
            // validation for constraint: itemType
            if (!is_string($corporateIDItem)) {
                throw new \InvalidArgumentException(sprintf('The ID property can only contain items of string, "%s" given', is_object($corporateIDItem) ? get_class($corporateIDItem) : gettype($corporateIDItem)), __LINE__);
            }
        }
        $this->ID = $iD;
        return $this;
    }
    /**
     * Add item to ID value
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \Sabre\UpdateReservation\StructType\Corporate
     */
    public function addToID($item)
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new \InvalidArgumentException(sprintf('The ID property can only contain items of string, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->ID[] = $item;
        return $this;
    }
    /**
     * Get CorporateDiscount value
     * @return string|null
     */
    public function getCorporateDiscount()
    {
        return $this->CorporateDiscount;
    }
    /**
     * Set CorporateDiscount value
     * @param string $corporateDiscount
     * @return \Sabre\UpdateReservation\StructType\Corporate
     */
    public function setCorporateDiscount($corporateDiscount = null)
    {
        // validation for constraint: string
        if (!is_null($corporateDiscount) && !is_string($corporateDiscount)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($corporateDiscount)), __LINE__);
        }
        $this->CorporateDiscount = $corporateDiscount;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\Corporate
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
