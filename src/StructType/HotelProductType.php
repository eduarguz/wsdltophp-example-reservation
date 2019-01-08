<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for HotelProductType StructType
 * @subpackage Structs
 */
class HotelProductType extends HotelType
{
    /**
     * The RateDescription
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\MultilineTextType
     */
    public $RateDescription;
    /**
     * The HotelPolicy
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\HotelPolicy
     */
    public $HotelPolicy;
    /**
     * The SupplementalInformation
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $SupplementalInformation;
    /**
     * The PricingElements
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\PricingElementsType
     */
    public $PricingElements;
    /**
     * Constructor method for HotelProductType
     * @uses HotelProductType::setRateDescription()
     * @uses HotelProductType::setHotelPolicy()
     * @uses HotelProductType::setSupplementalInformation()
     * @uses HotelProductType::setPricingElements()
     * @param \Sabre\UpdateReservation\StructType\MultilineTextType $rateDescription
     * @param \Sabre\UpdateReservation\StructType\HotelPolicy $hotelPolicy
     * @param string $supplementalInformation
     * @param \Sabre\UpdateReservation\StructType\PricingElementsType $pricingElements
     */
    public function __construct(\Sabre\UpdateReservation\StructType\MultilineTextType $rateDescription = null, \Sabre\UpdateReservation\StructType\HotelPolicy $hotelPolicy = null, $supplementalInformation = null, \Sabre\UpdateReservation\StructType\PricingElementsType $pricingElements = null)
    {
        $this
            ->setRateDescription($rateDescription)
            ->setHotelPolicy($hotelPolicy)
            ->setSupplementalInformation($supplementalInformation)
            ->setPricingElements($pricingElements);
    }
    /**
     * Get RateDescription value
     * @return \Sabre\UpdateReservation\StructType\MultilineTextType|null
     */
    public function getRateDescription()
    {
        return $this->RateDescription;
    }
    /**
     * Set RateDescription value
     * @param \Sabre\UpdateReservation\StructType\MultilineTextType $rateDescription
     * @return \Sabre\UpdateReservation\StructType\HotelProductType
     */
    public function setRateDescription(\Sabre\UpdateReservation\StructType\MultilineTextType $rateDescription = null)
    {
        $this->RateDescription = $rateDescription;
        return $this;
    }
    /**
     * Get HotelPolicy value
     * @return \Sabre\UpdateReservation\StructType\HotelPolicy|null
     */
    public function getHotelPolicy()
    {
        return $this->HotelPolicy;
    }
    /**
     * Set HotelPolicy value
     * @param \Sabre\UpdateReservation\StructType\HotelPolicy $hotelPolicy
     * @return \Sabre\UpdateReservation\StructType\HotelProductType
     */
    public function setHotelPolicy(\Sabre\UpdateReservation\StructType\HotelPolicy $hotelPolicy = null)
    {
        $this->HotelPolicy = $hotelPolicy;
        return $this;
    }
    /**
     * Get SupplementalInformation value
     * @return string|null
     */
    public function getSupplementalInformation()
    {
        return $this->SupplementalInformation;
    }
    /**
     * Set SupplementalInformation value
     * @param string $supplementalInformation
     * @return \Sabre\UpdateReservation\StructType\HotelProductType
     */
    public function setSupplementalInformation($supplementalInformation = null)
    {
        // validation for constraint: string
        if (!is_null($supplementalInformation) && !is_string($supplementalInformation)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($supplementalInformation)), __LINE__);
        }
        $this->SupplementalInformation = $supplementalInformation;
        return $this;
    }
    /**
     * Get PricingElements value
     * @return \Sabre\UpdateReservation\StructType\PricingElementsType|null
     */
    public function getPricingElements()
    {
        return $this->PricingElements;
    }
    /**
     * Set PricingElements value
     * @param \Sabre\UpdateReservation\StructType\PricingElementsType $pricingElements
     * @return \Sabre\UpdateReservation\StructType\HotelProductType
     */
    public function setPricingElements(\Sabre\UpdateReservation\StructType\PricingElementsType $pricingElements = null)
    {
        $this->PricingElements = $pricingElements;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\HotelProductType
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
