<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Transit StructType
 * Meta informations extracted from the WSDL
 * - documentation: Visa transit city
 * @subpackage Structs
 */
class Transit extends AbstractStructBase
{
    /**
     * The City
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\City
     */
    public $City;
    /**
     * Constructor method for Transit
     * @uses Transit::setCity()
     * @param \Sabre\UpdateReservation\StructType\City $city
     */
    public function __construct(\Sabre\UpdateReservation\StructType\City $city = null)
    {
        $this
            ->setCity($city);
    }
    /**
     * Get City value
     * @return \Sabre\UpdateReservation\StructType\City|null
     */
    public function getCity()
    {
        return $this->City;
    }
    /**
     * Set City value
     * @param \Sabre\UpdateReservation\StructType\City $city
     * @return \Sabre\UpdateReservation\StructType\Transit
     */
    public function setCity(\Sabre\UpdateReservation\StructType\City $city = null)
    {
        $this->City = $city;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\Transit
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
