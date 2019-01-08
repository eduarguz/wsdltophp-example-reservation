<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Fare StructType
 * @subpackage Structs
 */
class Fare extends AbstractStructBase
{
    /**
     * The PassengerReferences
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\PassengerReferences
     */
    public $PassengerReferences;
    /**
     * The SegmentReferences
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\SegmentReferences
     */
    public $SegmentReferences;
    /**
     * The ClassOfService
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\ClassOfService
     */
    public $ClassOfService;
    /**
     * The ClassCode
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\ClassCode
     */
    public $ClassCode;
    /**
     * The FareDescription
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\FareDescription
     */
    public $FareDescription;
    /**
     * The FarePrice
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\PriceType
     */
    public $FarePrice;
    /**
     * Constructor method for Fare
     * @uses Fare::setPassengerReferences()
     * @uses Fare::setSegmentReferences()
     * @uses Fare::setClassOfService()
     * @uses Fare::setClassCode()
     * @uses Fare::setFareDescription()
     * @uses Fare::setFarePrice()
     * @param \Sabre\UpdateReservation\StructType\PassengerReferences $passengerReferences
     * @param \Sabre\UpdateReservation\StructType\SegmentReferences $segmentReferences
     * @param \Sabre\UpdateReservation\StructType\ClassOfService $classOfService
     * @param \Sabre\UpdateReservation\StructType\ClassCode $classCode
     * @param \Sabre\UpdateReservation\StructType\FareDescription $fareDescription
     * @param \Sabre\UpdateReservation\StructType\PriceType $farePrice
     */
    public function __construct(\Sabre\UpdateReservation\StructType\PassengerReferences $passengerReferences = null, \Sabre\UpdateReservation\StructType\SegmentReferences $segmentReferences = null, \Sabre\UpdateReservation\StructType\ClassOfService $classOfService = null, \Sabre\UpdateReservation\StructType\ClassCode $classCode = null, \Sabre\UpdateReservation\StructType\FareDescription $fareDescription = null, \Sabre\UpdateReservation\StructType\PriceType $farePrice = null)
    {
        $this
            ->setPassengerReferences($passengerReferences)
            ->setSegmentReferences($segmentReferences)
            ->setClassOfService($classOfService)
            ->setClassCode($classCode)
            ->setFareDescription($fareDescription)
            ->setFarePrice($farePrice);
    }
    /**
     * Get PassengerReferences value
     * @return \Sabre\UpdateReservation\StructType\PassengerReferences|null
     */
    public function getPassengerReferences()
    {
        return $this->PassengerReferences;
    }
    /**
     * Set PassengerReferences value
     * @param \Sabre\UpdateReservation\StructType\PassengerReferences $passengerReferences
     * @return \Sabre\UpdateReservation\StructType\Fare
     */
    public function setPassengerReferences(\Sabre\UpdateReservation\StructType\PassengerReferences $passengerReferences = null)
    {
        $this->PassengerReferences = $passengerReferences;
        return $this;
    }
    /**
     * Get SegmentReferences value
     * @return \Sabre\UpdateReservation\StructType\SegmentReferences|null
     */
    public function getSegmentReferences()
    {
        return $this->SegmentReferences;
    }
    /**
     * Set SegmentReferences value
     * @param \Sabre\UpdateReservation\StructType\SegmentReferences $segmentReferences
     * @return \Sabre\UpdateReservation\StructType\Fare
     */
    public function setSegmentReferences(\Sabre\UpdateReservation\StructType\SegmentReferences $segmentReferences = null)
    {
        $this->SegmentReferences = $segmentReferences;
        return $this;
    }
    /**
     * Get ClassOfService value
     * @return \Sabre\UpdateReservation\StructType\ClassOfService|null
     */
    public function getClassOfService()
    {
        return $this->ClassOfService;
    }
    /**
     * Set ClassOfService value
     * @param \Sabre\UpdateReservation\StructType\ClassOfService $classOfService
     * @return \Sabre\UpdateReservation\StructType\Fare
     */
    public function setClassOfService(\Sabre\UpdateReservation\StructType\ClassOfService $classOfService = null)
    {
        $this->ClassOfService = $classOfService;
        return $this;
    }
    /**
     * Get ClassCode value
     * @return \Sabre\UpdateReservation\StructType\ClassCode|null
     */
    public function getClassCode()
    {
        return $this->ClassCode;
    }
    /**
     * Set ClassCode value
     * @param \Sabre\UpdateReservation\StructType\ClassCode $classCode
     * @return \Sabre\UpdateReservation\StructType\Fare
     */
    public function setClassCode(\Sabre\UpdateReservation\StructType\ClassCode $classCode = null)
    {
        $this->ClassCode = $classCode;
        return $this;
    }
    /**
     * Get FareDescription value
     * @return \Sabre\UpdateReservation\StructType\FareDescription|null
     */
    public function getFareDescription()
    {
        return $this->FareDescription;
    }
    /**
     * Set FareDescription value
     * @param \Sabre\UpdateReservation\StructType\FareDescription $fareDescription
     * @return \Sabre\UpdateReservation\StructType\Fare
     */
    public function setFareDescription(\Sabre\UpdateReservation\StructType\FareDescription $fareDescription = null)
    {
        $this->FareDescription = $fareDescription;
        return $this;
    }
    /**
     * Get FarePrice value
     * @return \Sabre\UpdateReservation\StructType\PriceType|null
     */
    public function getFarePrice()
    {
        return $this->FarePrice;
    }
    /**
     * Set FarePrice value
     * @param \Sabre\UpdateReservation\StructType\PriceType $farePrice
     * @return \Sabre\UpdateReservation\StructType\Fare
     */
    public function setFarePrice(\Sabre\UpdateReservation\StructType\PriceType $farePrice = null)
    {
        $this->FarePrice = $farePrice;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\Fare
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
