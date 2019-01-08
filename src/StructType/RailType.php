<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RailType StructType
 * @subpackage Structs
 */
class RailType extends AbstractStructBase
{
    /**
     * The StatusCode
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $StatusCode;
    /**
     * The Open
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $Open;
    /**
     * The CrossBorder
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $CrossBorder;
    /**
     * The Duration
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $Duration;
    /**
     * The MarketingCarrier
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\MarketingCarrier
     */
    public $MarketingCarrier;
    /**
     * The OperatingCarrier
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\ServiceProviderType
     */
    public $OperatingCarrier;
    /**
     * The Passengers
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\Passengers
     */
    public $Passengers;
    /**
     * The SupplementaryServices
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\SupplementaryServices
     */
    public $SupplementaryServices;
    /**
     * The TrainInfo
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\TrainDetailsType
     */
    public $TrainInfo;
    /**
     * The Accommodation
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\RailAccommodationType[]
     */
    public $Accommodation;
    /**
     * The StartDetails
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\LocationDetailsType
     */
    public $StartDetails;
    /**
     * The StopDetails
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\LocationDetailsType[]
     */
    public $StopDetails;
    /**
     * The EndDetails
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\LocationDetailsType
     */
    public $EndDetails;
    /**
     * The RailFares
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\RailFareType
     */
    public $RailFares;
    /**
     * The Documents
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\Documents
     */
    public $Documents;
    /**
     * The Details
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\Details
     */
    public $Details;
    /**
     * Constructor method for RailType
     * @uses RailType::setStatusCode()
     * @uses RailType::setOpen()
     * @uses RailType::setCrossBorder()
     * @uses RailType::setDuration()
     * @uses RailType::setMarketingCarrier()
     * @uses RailType::setOperatingCarrier()
     * @uses RailType::setPassengers()
     * @uses RailType::setSupplementaryServices()
     * @uses RailType::setTrainInfo()
     * @uses RailType::setAccommodation()
     * @uses RailType::setStartDetails()
     * @uses RailType::setStopDetails()
     * @uses RailType::setEndDetails()
     * @uses RailType::setRailFares()
     * @uses RailType::setDocuments()
     * @uses RailType::setDetails()
     * @param string $statusCode
     * @param bool $open
     * @param bool $crossBorder
     * @param string $duration
     * @param \Sabre\UpdateReservation\StructType\MarketingCarrier $marketingCarrier
     * @param \Sabre\UpdateReservation\StructType\ServiceProviderType $operatingCarrier
     * @param \Sabre\UpdateReservation\StructType\Passengers $passengers
     * @param \Sabre\UpdateReservation\StructType\SupplementaryServices $supplementaryServices
     * @param \Sabre\UpdateReservation\StructType\TrainDetailsType $trainInfo
     * @param \Sabre\UpdateReservation\StructType\RailAccommodationType[] $accommodation
     * @param \Sabre\UpdateReservation\StructType\LocationDetailsType $startDetails
     * @param \Sabre\UpdateReservation\StructType\LocationDetailsType[] $stopDetails
     * @param \Sabre\UpdateReservation\StructType\LocationDetailsType $endDetails
     * @param \Sabre\UpdateReservation\StructType\RailFareType $railFares
     * @param \Sabre\UpdateReservation\StructType\Documents $documents
     * @param \Sabre\UpdateReservation\StructType\Details $details
     */
    public function __construct($statusCode = null, $open = null, $crossBorder = null, $duration = null, \Sabre\UpdateReservation\StructType\MarketingCarrier $marketingCarrier = null, \Sabre\UpdateReservation\StructType\ServiceProviderType $operatingCarrier = null, \Sabre\UpdateReservation\StructType\Passengers $passengers = null, \Sabre\UpdateReservation\StructType\SupplementaryServices $supplementaryServices = null, \Sabre\UpdateReservation\StructType\TrainDetailsType $trainInfo = null, array $accommodation = array(), \Sabre\UpdateReservation\StructType\LocationDetailsType $startDetails = null, array $stopDetails = array(), \Sabre\UpdateReservation\StructType\LocationDetailsType $endDetails = null, \Sabre\UpdateReservation\StructType\RailFareType $railFares = null, \Sabre\UpdateReservation\StructType\Documents $documents = null, \Sabre\UpdateReservation\StructType\Details $details = null)
    {
        $this
            ->setStatusCode($statusCode)
            ->setOpen($open)
            ->setCrossBorder($crossBorder)
            ->setDuration($duration)
            ->setMarketingCarrier($marketingCarrier)
            ->setOperatingCarrier($operatingCarrier)
            ->setPassengers($passengers)
            ->setSupplementaryServices($supplementaryServices)
            ->setTrainInfo($trainInfo)
            ->setAccommodation($accommodation)
            ->setStartDetails($startDetails)
            ->setStopDetails($stopDetails)
            ->setEndDetails($endDetails)
            ->setRailFares($railFares)
            ->setDocuments($documents)
            ->setDetails($details);
    }
    /**
     * Get StatusCode value
     * @return string|null
     */
    public function getStatusCode()
    {
        return $this->StatusCode;
    }
    /**
     * Set StatusCode value
     * @param string $statusCode
     * @return \Sabre\UpdateReservation\StructType\RailType
     */
    public function setStatusCode($statusCode = null)
    {
        // validation for constraint: string
        if (!is_null($statusCode) && !is_string($statusCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($statusCode)), __LINE__);
        }
        $this->StatusCode = $statusCode;
        return $this;
    }
    /**
     * Get Open value
     * @return bool|null
     */
    public function getOpen()
    {
        return $this->Open;
    }
    /**
     * Set Open value
     * @param bool $open
     * @return \Sabre\UpdateReservation\StructType\RailType
     */
    public function setOpen($open = null)
    {
        // validation for constraint: boolean
        if (!is_null($open) && !is_bool($open)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($open)), __LINE__);
        }
        $this->Open = $open;
        return $this;
    }
    /**
     * Get CrossBorder value
     * @return bool|null
     */
    public function getCrossBorder()
    {
        return $this->CrossBorder;
    }
    /**
     * Set CrossBorder value
     * @param bool $crossBorder
     * @return \Sabre\UpdateReservation\StructType\RailType
     */
    public function setCrossBorder($crossBorder = null)
    {
        // validation for constraint: boolean
        if (!is_null($crossBorder) && !is_bool($crossBorder)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($crossBorder)), __LINE__);
        }
        $this->CrossBorder = $crossBorder;
        return $this;
    }
    /**
     * Get Duration value
     * @return string|null
     */
    public function getDuration()
    {
        return $this->Duration;
    }
    /**
     * Set Duration value
     * @param string $duration
     * @return \Sabre\UpdateReservation\StructType\RailType
     */
    public function setDuration($duration = null)
    {
        // validation for constraint: string
        if (!is_null($duration) && !is_string($duration)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($duration)), __LINE__);
        }
        $this->Duration = $duration;
        return $this;
    }
    /**
     * Get MarketingCarrier value
     * @return \Sabre\UpdateReservation\StructType\MarketingCarrier|null
     */
    public function getMarketingCarrier()
    {
        return $this->MarketingCarrier;
    }
    /**
     * Set MarketingCarrier value
     * @param \Sabre\UpdateReservation\StructType\MarketingCarrier $marketingCarrier
     * @return \Sabre\UpdateReservation\StructType\RailType
     */
    public function setMarketingCarrier(\Sabre\UpdateReservation\StructType\MarketingCarrier $marketingCarrier = null)
    {
        $this->MarketingCarrier = $marketingCarrier;
        return $this;
    }
    /**
     * Get OperatingCarrier value
     * @return \Sabre\UpdateReservation\StructType\ServiceProviderType|null
     */
    public function getOperatingCarrier()
    {
        return $this->OperatingCarrier;
    }
    /**
     * Set OperatingCarrier value
     * @param \Sabre\UpdateReservation\StructType\ServiceProviderType $operatingCarrier
     * @return \Sabre\UpdateReservation\StructType\RailType
     */
    public function setOperatingCarrier(\Sabre\UpdateReservation\StructType\ServiceProviderType $operatingCarrier = null)
    {
        $this->OperatingCarrier = $operatingCarrier;
        return $this;
    }
    /**
     * Get Passengers value
     * @return \Sabre\UpdateReservation\StructType\Passengers|null
     */
    public function getPassengers()
    {
        return $this->Passengers;
    }
    /**
     * Set Passengers value
     * @param \Sabre\UpdateReservation\StructType\Passengers $passengers
     * @return \Sabre\UpdateReservation\StructType\RailType
     */
    public function setPassengers(\Sabre\UpdateReservation\StructType\Passengers $passengers = null)
    {
        $this->Passengers = $passengers;
        return $this;
    }
    /**
     * Get SupplementaryServices value
     * @return \Sabre\UpdateReservation\StructType\SupplementaryServices|null
     */
    public function getSupplementaryServices()
    {
        return $this->SupplementaryServices;
    }
    /**
     * Set SupplementaryServices value
     * @param \Sabre\UpdateReservation\StructType\SupplementaryServices $supplementaryServices
     * @return \Sabre\UpdateReservation\StructType\RailType
     */
    public function setSupplementaryServices(\Sabre\UpdateReservation\StructType\SupplementaryServices $supplementaryServices = null)
    {
        $this->SupplementaryServices = $supplementaryServices;
        return $this;
    }
    /**
     * Get TrainInfo value
     * @return \Sabre\UpdateReservation\StructType\TrainDetailsType|null
     */
    public function getTrainInfo()
    {
        return $this->TrainInfo;
    }
    /**
     * Set TrainInfo value
     * @param \Sabre\UpdateReservation\StructType\TrainDetailsType $trainInfo
     * @return \Sabre\UpdateReservation\StructType\RailType
     */
    public function setTrainInfo(\Sabre\UpdateReservation\StructType\TrainDetailsType $trainInfo = null)
    {
        $this->TrainInfo = $trainInfo;
        return $this;
    }
    /**
     * Get Accommodation value
     * @return \Sabre\UpdateReservation\StructType\RailAccommodationType[]|null
     */
    public function getAccommodation()
    {
        return $this->Accommodation;
    }
    /**
     * Set Accommodation value
     * @throws \InvalidArgumentException
     * @param \Sabre\UpdateReservation\StructType\RailAccommodationType[] $accommodation
     * @return \Sabre\UpdateReservation\StructType\RailType
     */
    public function setAccommodation(array $accommodation = array())
    {
        foreach ($accommodation as $railTypeAccommodationItem) {
            // validation for constraint: itemType
            if (!$railTypeAccommodationItem instanceof \Sabre\UpdateReservation\StructType\RailAccommodationType) {
                throw new \InvalidArgumentException(sprintf('The Accommodation property can only contain items of \Sabre\UpdateReservation\StructType\RailAccommodationType, "%s" given', is_object($railTypeAccommodationItem) ? get_class($railTypeAccommodationItem) : gettype($railTypeAccommodationItem)), __LINE__);
            }
        }
        $this->Accommodation = $accommodation;
        return $this;
    }
    /**
     * Add item to Accommodation value
     * @throws \InvalidArgumentException
     * @param \Sabre\UpdateReservation\StructType\RailAccommodationType $item
     * @return \Sabre\UpdateReservation\StructType\RailType
     */
    public function addToAccommodation(\Sabre\UpdateReservation\StructType\RailAccommodationType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Sabre\UpdateReservation\StructType\RailAccommodationType) {
            throw new \InvalidArgumentException(sprintf('The Accommodation property can only contain items of \Sabre\UpdateReservation\StructType\RailAccommodationType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Accommodation[] = $item;
        return $this;
    }
    /**
     * Get StartDetails value
     * @return \Sabre\UpdateReservation\StructType\LocationDetailsType|null
     */
    public function getStartDetails()
    {
        return $this->StartDetails;
    }
    /**
     * Set StartDetails value
     * @param \Sabre\UpdateReservation\StructType\LocationDetailsType $startDetails
     * @return \Sabre\UpdateReservation\StructType\RailType
     */
    public function setStartDetails(\Sabre\UpdateReservation\StructType\LocationDetailsType $startDetails = null)
    {
        $this->StartDetails = $startDetails;
        return $this;
    }
    /**
     * Get StopDetails value
     * @return \Sabre\UpdateReservation\StructType\LocationDetailsType[]|null
     */
    public function getStopDetails()
    {
        return $this->StopDetails;
    }
    /**
     * Set StopDetails value
     * @throws \InvalidArgumentException
     * @param \Sabre\UpdateReservation\StructType\LocationDetailsType[] $stopDetails
     * @return \Sabre\UpdateReservation\StructType\RailType
     */
    public function setStopDetails(array $stopDetails = array())
    {
        foreach ($stopDetails as $railTypeStopDetailsItem) {
            // validation for constraint: itemType
            if (!$railTypeStopDetailsItem instanceof \Sabre\UpdateReservation\StructType\LocationDetailsType) {
                throw new \InvalidArgumentException(sprintf('The StopDetails property can only contain items of \Sabre\UpdateReservation\StructType\LocationDetailsType, "%s" given', is_object($railTypeStopDetailsItem) ? get_class($railTypeStopDetailsItem) : gettype($railTypeStopDetailsItem)), __LINE__);
            }
        }
        $this->StopDetails = $stopDetails;
        return $this;
    }
    /**
     * Add item to StopDetails value
     * @throws \InvalidArgumentException
     * @param \Sabre\UpdateReservation\StructType\LocationDetailsType $item
     * @return \Sabre\UpdateReservation\StructType\RailType
     */
    public function addToStopDetails(\Sabre\UpdateReservation\StructType\LocationDetailsType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Sabre\UpdateReservation\StructType\LocationDetailsType) {
            throw new \InvalidArgumentException(sprintf('The StopDetails property can only contain items of \Sabre\UpdateReservation\StructType\LocationDetailsType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->StopDetails[] = $item;
        return $this;
    }
    /**
     * Get EndDetails value
     * @return \Sabre\UpdateReservation\StructType\LocationDetailsType|null
     */
    public function getEndDetails()
    {
        return $this->EndDetails;
    }
    /**
     * Set EndDetails value
     * @param \Sabre\UpdateReservation\StructType\LocationDetailsType $endDetails
     * @return \Sabre\UpdateReservation\StructType\RailType
     */
    public function setEndDetails(\Sabre\UpdateReservation\StructType\LocationDetailsType $endDetails = null)
    {
        $this->EndDetails = $endDetails;
        return $this;
    }
    /**
     * Get RailFares value
     * @return \Sabre\UpdateReservation\StructType\RailFareType|null
     */
    public function getRailFares()
    {
        return $this->RailFares;
    }
    /**
     * Set RailFares value
     * @param \Sabre\UpdateReservation\StructType\RailFareType $railFares
     * @return \Sabre\UpdateReservation\StructType\RailType
     */
    public function setRailFares(\Sabre\UpdateReservation\StructType\RailFareType $railFares = null)
    {
        $this->RailFares = $railFares;
        return $this;
    }
    /**
     * Get Documents value
     * @return \Sabre\UpdateReservation\StructType\Documents|null
     */
    public function getDocuments()
    {
        return $this->Documents;
    }
    /**
     * Set Documents value
     * @param \Sabre\UpdateReservation\StructType\Documents $documents
     * @return \Sabre\UpdateReservation\StructType\RailType
     */
    public function setDocuments(\Sabre\UpdateReservation\StructType\Documents $documents = null)
    {
        $this->Documents = $documents;
        return $this;
    }
    /**
     * Get Details value
     * @return \Sabre\UpdateReservation\StructType\Details|null
     */
    public function getDetails()
    {
        return $this->Details;
    }
    /**
     * Set Details value
     * @param \Sabre\UpdateReservation\StructType\Details $details
     * @return \Sabre\UpdateReservation\StructType\RailType
     */
    public function setDetails(\Sabre\UpdateReservation\StructType\Details $details = null)
    {
        $this->Details = $details;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\RailType
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
