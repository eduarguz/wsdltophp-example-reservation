<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FareComponent StructType
 * @subpackage Structs
 */
class FareComponent extends AbstractStructBase
{
    /**
     * The FareBasisCode
     * Meta informations extracted from the WSDL
     * - documentation: "FareBasisCode" is used to return Fare Basis Code for particular Fare Component.
     * - maxOccurs: 1
     * - minOccurs: 1
     * - use: optional
     * @var string
     */
    public $FareBasisCode;
    /**
     * The BrandCode
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $BrandCode;
    /**
     * The AccountCode
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $AccountCode;
    /**
     * The PricingPassengerType
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $PricingPassengerType;
    /**
     * The Origin
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Origin;
    /**
     * The Destination
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Destination;
    /**
     * The Location
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\Location
     */
    public $Location;
    /**
     * The Dates
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\Dates
     */
    public $Dates;
    /**
     * The FlightSegmentNumbers
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\FlightSegmentNumbers
     */
    public $FlightSegmentNumbers;
    /**
     * The FareDirectionality
     * Meta informations extracted from the WSDL
     * - documentation: "FareDirectionality" is used to return directionality of the fare ("FROM" or "TO").
     * - use: optional
     * @var string
     */
    public $FareDirectionality;
    /**
     * The Amount
     * Meta informations extracted from the WSDL
     * - documentation: "Amount" is used to return NUC amount for particular Fare Component.
     * - use: optional
     * @var string
     */
    public $Amount;
    /**
     * The TicketDesignator
     * Meta informations extracted from the WSDL
     * - documentation: "TicketDesignator" is used to return Ticket Designator Code attached to Fare Basis Code.
     * - use: optional
     * @var string
     */
    public $TicketDesignator;
    /**
     * The GoverningCarrier
     * Meta informations extracted from the WSDL
     * - documentation: "GoverningCarrier" is used to return Governing Carrier Code e.g. EY, AA, LH.
     * - use: optional
     * @var string
     */
    public $GoverningCarrier;
    /**
     * The FareComponentNumber
     * Meta informations extracted from the WSDL
     * - documentation: "FareComponentNumber" is used to display number of fare component stored in PQ.
     * - use: optional
     * @var string
     */
    public $FareComponentNumber;
    /**
     * Constructor method for FareComponent
     * @uses FareComponent::setFareBasisCode()
     * @uses FareComponent::setBrandCode()
     * @uses FareComponent::setAccountCode()
     * @uses FareComponent::setPricingPassengerType()
     * @uses FareComponent::setOrigin()
     * @uses FareComponent::setDestination()
     * @uses FareComponent::setLocation()
     * @uses FareComponent::setDates()
     * @uses FareComponent::setFlightSegmentNumbers()
     * @uses FareComponent::setFareDirectionality()
     * @uses FareComponent::setAmount()
     * @uses FareComponent::setTicketDesignator()
     * @uses FareComponent::setGoverningCarrier()
     * @uses FareComponent::setFareComponentNumber()
     * @param string $fareBasisCode
     * @param string $brandCode
     * @param string $accountCode
     * @param string $pricingPassengerType
     * @param string $origin
     * @param string $destination
     * @param \Sabre\UpdateReservation\StructType\Location $location
     * @param \Sabre\UpdateReservation\StructType\Dates $dates
     * @param \Sabre\UpdateReservation\StructType\FlightSegmentNumbers $flightSegmentNumbers
     * @param string $fareDirectionality
     * @param string $amount
     * @param string $ticketDesignator
     * @param string $governingCarrier
     * @param string $fareComponentNumber
     */
    public function __construct($fareBasisCode = null, $brandCode = null, $accountCode = null, $pricingPassengerType = null, $origin = null, $destination = null, \Sabre\UpdateReservation\StructType\Location $location = null, \Sabre\UpdateReservation\StructType\Dates $dates = null, \Sabre\UpdateReservation\StructType\FlightSegmentNumbers $flightSegmentNumbers = null, $fareDirectionality = null, $amount = null, $ticketDesignator = null, $governingCarrier = null, $fareComponentNumber = null)
    {
        $this
            ->setFareBasisCode($fareBasisCode)
            ->setBrandCode($brandCode)
            ->setAccountCode($accountCode)
            ->setPricingPassengerType($pricingPassengerType)
            ->setOrigin($origin)
            ->setDestination($destination)
            ->setLocation($location)
            ->setDates($dates)
            ->setFlightSegmentNumbers($flightSegmentNumbers)
            ->setFareDirectionality($fareDirectionality)
            ->setAmount($amount)
            ->setTicketDesignator($ticketDesignator)
            ->setGoverningCarrier($governingCarrier)
            ->setFareComponentNumber($fareComponentNumber);
    }
    /**
     * Get FareBasisCode value
     * @return string
     */
    public function getFareBasisCode()
    {
        return $this->FareBasisCode;
    }
    /**
     * Set FareBasisCode value
     * @param string $fareBasisCode
     * @return \Sabre\UpdateReservation\StructType\FareComponent
     */
    public function setFareBasisCode($fareBasisCode = null)
    {
        // validation for constraint: string
        if (!is_null($fareBasisCode) && !is_string($fareBasisCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($fareBasisCode)), __LINE__);
        }
        $this->FareBasisCode = $fareBasisCode;
        return $this;
    }
    /**
     * Get BrandCode value
     * @return string|null
     */
    public function getBrandCode()
    {
        return $this->BrandCode;
    }
    /**
     * Set BrandCode value
     * @param string $brandCode
     * @return \Sabre\UpdateReservation\StructType\FareComponent
     */
    public function setBrandCode($brandCode = null)
    {
        // validation for constraint: string
        if (!is_null($brandCode) && !is_string($brandCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($brandCode)), __LINE__);
        }
        $this->BrandCode = $brandCode;
        return $this;
    }
    /**
     * Get AccountCode value
     * @return string|null
     */
    public function getAccountCode()
    {
        return $this->AccountCode;
    }
    /**
     * Set AccountCode value
     * @param string $accountCode
     * @return \Sabre\UpdateReservation\StructType\FareComponent
     */
    public function setAccountCode($accountCode = null)
    {
        // validation for constraint: string
        if (!is_null($accountCode) && !is_string($accountCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($accountCode)), __LINE__);
        }
        $this->AccountCode = $accountCode;
        return $this;
    }
    /**
     * Get PricingPassengerType value
     * @return string|null
     */
    public function getPricingPassengerType()
    {
        return $this->PricingPassengerType;
    }
    /**
     * Set PricingPassengerType value
     * @param string $pricingPassengerType
     * @return \Sabre\UpdateReservation\StructType\FareComponent
     */
    public function setPricingPassengerType($pricingPassengerType = null)
    {
        // validation for constraint: string
        if (!is_null($pricingPassengerType) && !is_string($pricingPassengerType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($pricingPassengerType)), __LINE__);
        }
        $this->PricingPassengerType = $pricingPassengerType;
        return $this;
    }
    /**
     * Get Origin value
     * @return string|null
     */
    public function getOrigin()
    {
        return $this->Origin;
    }
    /**
     * Set Origin value
     * @param string $origin
     * @return \Sabre\UpdateReservation\StructType\FareComponent
     */
    public function setOrigin($origin = null)
    {
        // validation for constraint: string
        if (!is_null($origin) && !is_string($origin)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($origin)), __LINE__);
        }
        $this->Origin = $origin;
        return $this;
    }
    /**
     * Get Destination value
     * @return string|null
     */
    public function getDestination()
    {
        return $this->Destination;
    }
    /**
     * Set Destination value
     * @param string $destination
     * @return \Sabre\UpdateReservation\StructType\FareComponent
     */
    public function setDestination($destination = null)
    {
        // validation for constraint: string
        if (!is_null($destination) && !is_string($destination)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($destination)), __LINE__);
        }
        $this->Destination = $destination;
        return $this;
    }
    /**
     * Get Location value
     * @return \Sabre\UpdateReservation\StructType\Location|null
     */
    public function getLocation()
    {
        return $this->Location;
    }
    /**
     * Set Location value
     * @param \Sabre\UpdateReservation\StructType\Location $location
     * @return \Sabre\UpdateReservation\StructType\FareComponent
     */
    public function setLocation(\Sabre\UpdateReservation\StructType\Location $location = null)
    {
        $this->Location = $location;
        return $this;
    }
    /**
     * Get Dates value
     * @return \Sabre\UpdateReservation\StructType\Dates|null
     */
    public function getDates()
    {
        return $this->Dates;
    }
    /**
     * Set Dates value
     * @param \Sabre\UpdateReservation\StructType\Dates $dates
     * @return \Sabre\UpdateReservation\StructType\FareComponent
     */
    public function setDates(\Sabre\UpdateReservation\StructType\Dates $dates = null)
    {
        $this->Dates = $dates;
        return $this;
    }
    /**
     * Get FlightSegmentNumbers value
     * @return \Sabre\UpdateReservation\StructType\FlightSegmentNumbers|null
     */
    public function getFlightSegmentNumbers()
    {
        return $this->FlightSegmentNumbers;
    }
    /**
     * Set FlightSegmentNumbers value
     * @param \Sabre\UpdateReservation\StructType\FlightSegmentNumbers $flightSegmentNumbers
     * @return \Sabre\UpdateReservation\StructType\FareComponent
     */
    public function setFlightSegmentNumbers(\Sabre\UpdateReservation\StructType\FlightSegmentNumbers $flightSegmentNumbers = null)
    {
        $this->FlightSegmentNumbers = $flightSegmentNumbers;
        return $this;
    }
    /**
     * Get FareDirectionality value
     * @return string|null
     */
    public function getFareDirectionality()
    {
        return $this->FareDirectionality;
    }
    /**
     * Set FareDirectionality value
     * @param string $fareDirectionality
     * @return \Sabre\UpdateReservation\StructType\FareComponent
     */
    public function setFareDirectionality($fareDirectionality = null)
    {
        // validation for constraint: string
        if (!is_null($fareDirectionality) && !is_string($fareDirectionality)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($fareDirectionality)), __LINE__);
        }
        $this->FareDirectionality = $fareDirectionality;
        return $this;
    }
    /**
     * Get Amount value
     * @return string|null
     */
    public function getAmount()
    {
        return $this->Amount;
    }
    /**
     * Set Amount value
     * @param string $amount
     * @return \Sabre\UpdateReservation\StructType\FareComponent
     */
    public function setAmount($amount = null)
    {
        // validation for constraint: string
        if (!is_null($amount) && !is_string($amount)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($amount)), __LINE__);
        }
        $this->Amount = $amount;
        return $this;
    }
    /**
     * Get TicketDesignator value
     * @return string|null
     */
    public function getTicketDesignator()
    {
        return $this->TicketDesignator;
    }
    /**
     * Set TicketDesignator value
     * @param string $ticketDesignator
     * @return \Sabre\UpdateReservation\StructType\FareComponent
     */
    public function setTicketDesignator($ticketDesignator = null)
    {
        // validation for constraint: string
        if (!is_null($ticketDesignator) && !is_string($ticketDesignator)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($ticketDesignator)), __LINE__);
        }
        $this->TicketDesignator = $ticketDesignator;
        return $this;
    }
    /**
     * Get GoverningCarrier value
     * @return string|null
     */
    public function getGoverningCarrier()
    {
        return $this->GoverningCarrier;
    }
    /**
     * Set GoverningCarrier value
     * @param string $governingCarrier
     * @return \Sabre\UpdateReservation\StructType\FareComponent
     */
    public function setGoverningCarrier($governingCarrier = null)
    {
        // validation for constraint: string
        if (!is_null($governingCarrier) && !is_string($governingCarrier)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($governingCarrier)), __LINE__);
        }
        $this->GoverningCarrier = $governingCarrier;
        return $this;
    }
    /**
     * Get FareComponentNumber value
     * @return string|null
     */
    public function getFareComponentNumber()
    {
        return $this->FareComponentNumber;
    }
    /**
     * Set FareComponentNumber value
     * @param string $fareComponentNumber
     * @return \Sabre\UpdateReservation\StructType\FareComponent
     */
    public function setFareComponentNumber($fareComponentNumber = null)
    {
        // validation for constraint: string
        if (!is_null($fareComponentNumber) && !is_string($fareComponentNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($fareComponentNumber)), __LINE__);
        }
        $this->FareComponentNumber = $fareComponentNumber;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\FareComponent
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
