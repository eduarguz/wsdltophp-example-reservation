<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ItinerariesPerGroupType StructType
 * @subpackage Structs
 */
class ItinerariesPerGroupType extends AbstractStructBase
{
    /**
     * The itinerariesPerGroup
     * Meta informations extracted from the WSDL
     * - documentation: Indicates desired number of itineraries to be returned in each passenger group at beggining of response.
     * @var int
     */
    public $itinerariesPerGroup;
    /**
     * Constructor method for ItinerariesPerGroupType
     * @uses ItinerariesPerGroupType::setItinerariesPerGroup()
     * @param int $itinerariesPerGroup
     */
    public function __construct($itinerariesPerGroup = null)
    {
        $this
            ->setItinerariesPerGroup($itinerariesPerGroup);
    }
    /**
     * Get itinerariesPerGroup value
     * @return int|null
     */
    public function getItinerariesPerGroup()
    {
        return $this->itinerariesPerGroup;
    }
    /**
     * Set itinerariesPerGroup value
     * @param int $itinerariesPerGroup
     * @return \Sabre\UpdateReservation\StructType\ItinerariesPerGroupType
     */
    public function setItinerariesPerGroup($itinerariesPerGroup = null)
    {
        // validation for constraint: int
        if (!is_null($itinerariesPerGroup) && !is_numeric($itinerariesPerGroup)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($itinerariesPerGroup)), __LINE__);
        }
        $this->itinerariesPerGroup = $itinerariesPerGroup;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\ItinerariesPerGroupType
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
