<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PricingRequestInformationType StructType
 * @subpackage Structs
 */
class PricingRequestInformationType extends AbstractStructBase
{
    /**
     * The AirPriceQualifiers
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\AirPriceQualifiersType
     */
    public $AirPriceQualifiers;
    /**
     * The HotelRateQualifiers
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\HotelRateQualifiersType
     */
    public $HotelRateQualifiers;
    /**
     * The CarRateQualifiers
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\CarRateQualifiersType
     */
    public $CarRateQualifiers;
    /**
     * Constructor method for PricingRequestInformationType
     * @uses PricingRequestInformationType::setAirPriceQualifiers()
     * @uses PricingRequestInformationType::setHotelRateQualifiers()
     * @uses PricingRequestInformationType::setCarRateQualifiers()
     * @param \Sabre\UpdateReservation\StructType\AirPriceQualifiersType $airPriceQualifiers
     * @param \Sabre\UpdateReservation\StructType\HotelRateQualifiersType $hotelRateQualifiers
     * @param \Sabre\UpdateReservation\StructType\CarRateQualifiersType $carRateQualifiers
     */
    public function __construct(\Sabre\UpdateReservation\StructType\AirPriceQualifiersType $airPriceQualifiers = null, \Sabre\UpdateReservation\StructType\HotelRateQualifiersType $hotelRateQualifiers = null, \Sabre\UpdateReservation\StructType\CarRateQualifiersType $carRateQualifiers = null)
    {
        $this
            ->setAirPriceQualifiers($airPriceQualifiers)
            ->setHotelRateQualifiers($hotelRateQualifiers)
            ->setCarRateQualifiers($carRateQualifiers);
    }
    /**
     * Get AirPriceQualifiers value
     * @return \Sabre\UpdateReservation\StructType\AirPriceQualifiersType|null
     */
    public function getAirPriceQualifiers()
    {
        return $this->AirPriceQualifiers;
    }
    /**
     * Set AirPriceQualifiers value
     * @param \Sabre\UpdateReservation\StructType\AirPriceQualifiersType $airPriceQualifiers
     * @return \Sabre\UpdateReservation\StructType\PricingRequestInformationType
     */
    public function setAirPriceQualifiers(\Sabre\UpdateReservation\StructType\AirPriceQualifiersType $airPriceQualifiers = null)
    {
        $this->AirPriceQualifiers = $airPriceQualifiers;
        return $this;
    }
    /**
     * Get HotelRateQualifiers value
     * @return \Sabre\UpdateReservation\StructType\HotelRateQualifiersType|null
     */
    public function getHotelRateQualifiers()
    {
        return $this->HotelRateQualifiers;
    }
    /**
     * Set HotelRateQualifiers value
     * @param \Sabre\UpdateReservation\StructType\HotelRateQualifiersType $hotelRateQualifiers
     * @return \Sabre\UpdateReservation\StructType\PricingRequestInformationType
     */
    public function setHotelRateQualifiers(\Sabre\UpdateReservation\StructType\HotelRateQualifiersType $hotelRateQualifiers = null)
    {
        $this->HotelRateQualifiers = $hotelRateQualifiers;
        return $this;
    }
    /**
     * Get CarRateQualifiers value
     * @return \Sabre\UpdateReservation\StructType\CarRateQualifiersType|null
     */
    public function getCarRateQualifiers()
    {
        return $this->CarRateQualifiers;
    }
    /**
     * Set CarRateQualifiers value
     * @param \Sabre\UpdateReservation\StructType\CarRateQualifiersType $carRateQualifiers
     * @return \Sabre\UpdateReservation\StructType\PricingRequestInformationType
     */
    public function setCarRateQualifiers(\Sabre\UpdateReservation\StructType\CarRateQualifiersType $carRateQualifiers = null)
    {
        $this->CarRateQualifiers = $carRateQualifiers;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\PricingRequestInformationType
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
