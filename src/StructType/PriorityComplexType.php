<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PriorityComplexType StructType
 * @subpackage Structs
 */
class PriorityComplexType extends AbstractStructBase
{
    /**
     * The Price
     * Meta informations extracted from the WSDL
     * - documentation: Prefer cheaper itineraries
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\PriorityType
     */
    public $Price;
    /**
     * The DirectFlights
     * Meta informations extracted from the WSDL
     * - documentation: Prefer itineraries will less connections
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\PriorityLegType
     */
    public $DirectFlights;
    /**
     * The Time
     * Meta informations extracted from the WSDL
     * - documentation: Prefer itineraries departing closer to requested departure time
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\PriorityType
     */
    public $Time;
    /**
     * The Vendor
     * Meta informations extracted from the WSDL
     * - documentation: Promote certain marketing carriers over all the others in returning results. (configured in rules).
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\PriorityType
     */
    public $Vendor;
    /**
     * The MarketingCarrier
     * Meta informations extracted from the WSDL
     * - documentation: Prefer itineraries with marketing carriers in order speciied in Carrier subtags, comparing segment-wise
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\CarrierType
     */
    public $MarketingCarrier;
    /**
     * The OperatingCarrier
     * Meta informations extracted from the WSDL
     * - documentation: Prefer itineraries with operating carriers in order speciied in Carrier subtags, comparing segment-wise
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\CarrierType
     */
    public $OperatingCarrier;
    /**
     * The ElapsedTime
     * Meta informations extracted from the WSDL
     * - documentation: Prefer itineraries with shorter travel times
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\PriorityType
     */
    public $ElapsedTime;
    /**
     * The DepartureTime
     * Meta informations extracted from the WSDL
     * - documentation: Prefer itineraries departing earlier during the day
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\PriorityLegType
     */
    public $DepartureTime;
    /**
     * The ConnectionTime
     * Meta informations extracted from the WSDL
     * - documentation: Prefer itineraries with smaller amount of time waiting in the airports during connections
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\PriorityLegType
     */
    public $ConnectionTime;
    /**
     * Constructor method for PriorityComplexType
     * @uses PriorityComplexType::setPrice()
     * @uses PriorityComplexType::setDirectFlights()
     * @uses PriorityComplexType::setTime()
     * @uses PriorityComplexType::setVendor()
     * @uses PriorityComplexType::setMarketingCarrier()
     * @uses PriorityComplexType::setOperatingCarrier()
     * @uses PriorityComplexType::setElapsedTime()
     * @uses PriorityComplexType::setDepartureTime()
     * @uses PriorityComplexType::setConnectionTime()
     * @param \Sabre\UpdateReservation\StructType\PriorityType $price
     * @param \Sabre\UpdateReservation\StructType\PriorityLegType $directFlights
     * @param \Sabre\UpdateReservation\StructType\PriorityType $time
     * @param \Sabre\UpdateReservation\StructType\PriorityType $vendor
     * @param \Sabre\UpdateReservation\StructType\CarrierType $marketingCarrier
     * @param \Sabre\UpdateReservation\StructType\CarrierType $operatingCarrier
     * @param \Sabre\UpdateReservation\StructType\PriorityType $elapsedTime
     * @param \Sabre\UpdateReservation\StructType\PriorityLegType $departureTime
     * @param \Sabre\UpdateReservation\StructType\PriorityLegType $connectionTime
     */
    public function __construct(\Sabre\UpdateReservation\StructType\PriorityType $price = null, \Sabre\UpdateReservation\StructType\PriorityLegType $directFlights = null, \Sabre\UpdateReservation\StructType\PriorityType $time = null, \Sabre\UpdateReservation\StructType\PriorityType $vendor = null, \Sabre\UpdateReservation\StructType\CarrierType $marketingCarrier = null, \Sabre\UpdateReservation\StructType\CarrierType $operatingCarrier = null, \Sabre\UpdateReservation\StructType\PriorityType $elapsedTime = null, \Sabre\UpdateReservation\StructType\PriorityLegType $departureTime = null, \Sabre\UpdateReservation\StructType\PriorityLegType $connectionTime = null)
    {
        $this
            ->setPrice($price)
            ->setDirectFlights($directFlights)
            ->setTime($time)
            ->setVendor($vendor)
            ->setMarketingCarrier($marketingCarrier)
            ->setOperatingCarrier($operatingCarrier)
            ->setElapsedTime($elapsedTime)
            ->setDepartureTime($departureTime)
            ->setConnectionTime($connectionTime);
    }
    /**
     * Get Price value
     * @return \Sabre\UpdateReservation\StructType\PriorityType|null
     */
    public function getPrice()
    {
        return $this->Price;
    }
    /**
     * Set Price value
     * @param \Sabre\UpdateReservation\StructType\PriorityType $price
     * @return \Sabre\UpdateReservation\StructType\PriorityComplexType
     */
    public function setPrice(\Sabre\UpdateReservation\StructType\PriorityType $price = null)
    {
        $this->Price = $price;
        return $this;
    }
    /**
     * Get DirectFlights value
     * @return \Sabre\UpdateReservation\StructType\PriorityLegType|null
     */
    public function getDirectFlights()
    {
        return $this->DirectFlights;
    }
    /**
     * Set DirectFlights value
     * @param \Sabre\UpdateReservation\StructType\PriorityLegType $directFlights
     * @return \Sabre\UpdateReservation\StructType\PriorityComplexType
     */
    public function setDirectFlights(\Sabre\UpdateReservation\StructType\PriorityLegType $directFlights = null)
    {
        $this->DirectFlights = $directFlights;
        return $this;
    }
    /**
     * Get Time value
     * @return \Sabre\UpdateReservation\StructType\PriorityType|null
     */
    public function getTime()
    {
        return $this->Time;
    }
    /**
     * Set Time value
     * @param \Sabre\UpdateReservation\StructType\PriorityType $time
     * @return \Sabre\UpdateReservation\StructType\PriorityComplexType
     */
    public function setTime(\Sabre\UpdateReservation\StructType\PriorityType $time = null)
    {
        $this->Time = $time;
        return $this;
    }
    /**
     * Get Vendor value
     * @return \Sabre\UpdateReservation\StructType\PriorityType|null
     */
    public function getVendor()
    {
        return $this->Vendor;
    }
    /**
     * Set Vendor value
     * @param \Sabre\UpdateReservation\StructType\PriorityType $vendor
     * @return \Sabre\UpdateReservation\StructType\PriorityComplexType
     */
    public function setVendor(\Sabre\UpdateReservation\StructType\PriorityType $vendor = null)
    {
        $this->Vendor = $vendor;
        return $this;
    }
    /**
     * Get MarketingCarrier value
     * @return \Sabre\UpdateReservation\StructType\CarrierType|null
     */
    public function getMarketingCarrier()
    {
        return $this->MarketingCarrier;
    }
    /**
     * Set MarketingCarrier value
     * @param \Sabre\UpdateReservation\StructType\CarrierType $marketingCarrier
     * @return \Sabre\UpdateReservation\StructType\PriorityComplexType
     */
    public function setMarketingCarrier(\Sabre\UpdateReservation\StructType\CarrierType $marketingCarrier = null)
    {
        $this->MarketingCarrier = $marketingCarrier;
        return $this;
    }
    /**
     * Get OperatingCarrier value
     * @return \Sabre\UpdateReservation\StructType\CarrierType|null
     */
    public function getOperatingCarrier()
    {
        return $this->OperatingCarrier;
    }
    /**
     * Set OperatingCarrier value
     * @param \Sabre\UpdateReservation\StructType\CarrierType $operatingCarrier
     * @return \Sabre\UpdateReservation\StructType\PriorityComplexType
     */
    public function setOperatingCarrier(\Sabre\UpdateReservation\StructType\CarrierType $operatingCarrier = null)
    {
        $this->OperatingCarrier = $operatingCarrier;
        return $this;
    }
    /**
     * Get ElapsedTime value
     * @return \Sabre\UpdateReservation\StructType\PriorityType|null
     */
    public function getElapsedTime()
    {
        return $this->ElapsedTime;
    }
    /**
     * Set ElapsedTime value
     * @param \Sabre\UpdateReservation\StructType\PriorityType $elapsedTime
     * @return \Sabre\UpdateReservation\StructType\PriorityComplexType
     */
    public function setElapsedTime(\Sabre\UpdateReservation\StructType\PriorityType $elapsedTime = null)
    {
        $this->ElapsedTime = $elapsedTime;
        return $this;
    }
    /**
     * Get DepartureTime value
     * @return \Sabre\UpdateReservation\StructType\PriorityLegType|null
     */
    public function getDepartureTime()
    {
        return $this->DepartureTime;
    }
    /**
     * Set DepartureTime value
     * @param \Sabre\UpdateReservation\StructType\PriorityLegType $departureTime
     * @return \Sabre\UpdateReservation\StructType\PriorityComplexType
     */
    public function setDepartureTime(\Sabre\UpdateReservation\StructType\PriorityLegType $departureTime = null)
    {
        $this->DepartureTime = $departureTime;
        return $this;
    }
    /**
     * Get ConnectionTime value
     * @return \Sabre\UpdateReservation\StructType\PriorityLegType|null
     */
    public function getConnectionTime()
    {
        return $this->ConnectionTime;
    }
    /**
     * Set ConnectionTime value
     * @param \Sabre\UpdateReservation\StructType\PriorityLegType $connectionTime
     * @return \Sabre\UpdateReservation\StructType\PriorityComplexType
     */
    public function setConnectionTime(\Sabre\UpdateReservation\StructType\PriorityLegType $connectionTime = null)
    {
        $this->ConnectionTime = $connectionTime;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\PriorityComplexType
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
