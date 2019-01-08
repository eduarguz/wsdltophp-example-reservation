<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PartnershipAirlineCodes StructType
 * @subpackage Structs
 */
class PartnershipAirlineCodes extends AbstractStructBase
{
    /**
     * The Code
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 1
     * @var string[]
     */
    public $Code;
    /**
     * Constructor method for PartnershipAirlineCodes
     * @uses PartnershipAirlineCodes::setCode()
     * @param string[] $code
     */
    public function __construct(array $code = array())
    {
        $this
            ->setCode($code);
    }
    /**
     * Get Code value
     * @return string[]
     */
    public function getCode()
    {
        return $this->Code;
    }
    /**
     * Set Code value
     * @throws \InvalidArgumentException
     * @param string[] $code
     * @return \Sabre\UpdateReservation\StructType\PartnershipAirlineCodes
     */
    public function setCode(array $code = array())
    {
        foreach ($code as $partnershipAirlineCodesCodeItem) {
            // validation for constraint: itemType
            if (!is_string($partnershipAirlineCodesCodeItem)) {
                throw new \InvalidArgumentException(sprintf('The Code property can only contain items of string, "%s" given', is_object($partnershipAirlineCodesCodeItem) ? get_class($partnershipAirlineCodesCodeItem) : gettype($partnershipAirlineCodesCodeItem)), __LINE__);
            }
        }
        $this->Code = $code;
        return $this;
    }
    /**
     * Add item to Code value
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \Sabre\UpdateReservation\StructType\PartnershipAirlineCodes
     */
    public function addToCode($item)
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new \InvalidArgumentException(sprintf('The Code property can only contain items of string, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Code[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\PartnershipAirlineCodes
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
