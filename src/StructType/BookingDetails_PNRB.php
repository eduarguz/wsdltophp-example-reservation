<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BookingDetails.PNRB StructType
 * @subpackage Structs
 */
class BookingDetails_PNRB extends AbstractStructBase
{
    /**
     * The Header
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    public $Header;
    /**
     * The RecordLocator
     * Meta informations extracted from the WSDL
     * - documentation: Sabre PNR Locator. Example "XBZVXW"
     * - minOccurs: 0
     * @var string
     */
    public $RecordLocator;
    /**
     * The CreationTimestamp
     * Meta informations extracted from the WSDL
     * - documentation: Date PNR created. Example "2013-07-16T05:06:00"
     * - minOccurs: 0
     * @var string
     */
    public $CreationTimestamp;
    /**
     * The SystemCreationTimestamp
     * Meta informations extracted from the WSDL
     * - documentation: Sabre PNR Locator
     * - minOccurs: 0
     * @var string
     */
    public $SystemCreationTimestamp;
    /**
     * The CreationAgentID
     * Meta informations extracted from the WSDL
     * - documentation: Agent Sine of the creating agent/individual. Example "H6O/ SSR"
     * - minOccurs: 0
     * @var string
     */
    public $CreationAgentID;
    /**
     * The UpdateTimestamp
     * Meta informations extracted from the WSDL
     * - documentation: Date PNR was last filed in Sabre. Example "2013-07-16T05:06:45"
     * - minOccurs: 0
     * @var string
     */
    public $UpdateTimestamp;
    /**
     * The PNRSequence
     * Meta informations extracted from the WSDL
     * - documentation: PNR sequence number/counter increased with each PNR update. Example "28" | Used for Numeric values, from 1 to 9999 inclusive. | Used for Numeric values, from 1 to 9999 inclusive.
     * - minOccurs: 0
     * - maxInclusive: 99999
     * - minInclusive: 0
     * @var int
     */
    public $PNRSequence;
    /**
     * The FlightsRange
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\FlightsRange
     */
    public $FlightsRange;
    /**
     * The ItineraryDate
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\ItineraryDate
     */
    public $ItineraryDate;
    /**
     * The DivideSplitDetails
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\DivideSplitDetails
     */
    public $DivideSplitDetails;
    /**
     * The EstimatedPurgeTimestamp
     * Meta informations extracted from the WSDL
     * - documentation: Estimated Date PNR will purge from Sabre. Example "2013-07-16T05:06:45"
     * - minOccurs: 0
     * @var string
     */
    public $EstimatedPurgeTimestamp;
    /**
     * The UpdateToken
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $UpdateToken;
    /**
     * Constructor method for BookingDetails.PNRB
     * @uses BookingDetails_PNRB::setHeader()
     * @uses BookingDetails_PNRB::setRecordLocator()
     * @uses BookingDetails_PNRB::setCreationTimestamp()
     * @uses BookingDetails_PNRB::setSystemCreationTimestamp()
     * @uses BookingDetails_PNRB::setCreationAgentID()
     * @uses BookingDetails_PNRB::setUpdateTimestamp()
     * @uses BookingDetails_PNRB::setPNRSequence()
     * @uses BookingDetails_PNRB::setFlightsRange()
     * @uses BookingDetails_PNRB::setItineraryDate()
     * @uses BookingDetails_PNRB::setDivideSplitDetails()
     * @uses BookingDetails_PNRB::setEstimatedPurgeTimestamp()
     * @uses BookingDetails_PNRB::setUpdateToken()
     * @param string[] $header
     * @param string $recordLocator
     * @param string $creationTimestamp
     * @param string $systemCreationTimestamp
     * @param string $creationAgentID
     * @param string $updateTimestamp
     * @param int $pNRSequence
     * @param \Sabre\UpdateReservation\StructType\FlightsRange $flightsRange
     * @param \Sabre\UpdateReservation\StructType\ItineraryDate $itineraryDate
     * @param \Sabre\UpdateReservation\StructType\DivideSplitDetails $divideSplitDetails
     * @param string $estimatedPurgeTimestamp
     * @param string $updateToken
     */
    public function __construct(array $header = array(), $recordLocator = null, $creationTimestamp = null, $systemCreationTimestamp = null, $creationAgentID = null, $updateTimestamp = null, $pNRSequence = null, \Sabre\UpdateReservation\StructType\FlightsRange $flightsRange = null, \Sabre\UpdateReservation\StructType\ItineraryDate $itineraryDate = null, \Sabre\UpdateReservation\StructType\DivideSplitDetails $divideSplitDetails = null, $estimatedPurgeTimestamp = null, $updateToken = null)
    {
        $this
            ->setHeader($header)
            ->setRecordLocator($recordLocator)
            ->setCreationTimestamp($creationTimestamp)
            ->setSystemCreationTimestamp($systemCreationTimestamp)
            ->setCreationAgentID($creationAgentID)
            ->setUpdateTimestamp($updateTimestamp)
            ->setPNRSequence($pNRSequence)
            ->setFlightsRange($flightsRange)
            ->setItineraryDate($itineraryDate)
            ->setDivideSplitDetails($divideSplitDetails)
            ->setEstimatedPurgeTimestamp($estimatedPurgeTimestamp)
            ->setUpdateToken($updateToken);
    }
    /**
     * Get Header value
     * @return string[]|null
     */
    public function getHeader()
    {
        return $this->Header;
    }
    /**
     * Set Header value
     * @throws \InvalidArgumentException
     * @param string[] $header
     * @return \Sabre\UpdateReservation\StructType\BookingDetails_PNRB
     */
    public function setHeader(array $header = array())
    {
        foreach ($header as $bookingDetails_PNRBHeaderItem) {
            // validation for constraint: itemType
            if (!is_string($bookingDetails_PNRBHeaderItem)) {
                throw new \InvalidArgumentException(sprintf('The Header property can only contain items of string, "%s" given', is_object($bookingDetails_PNRBHeaderItem) ? get_class($bookingDetails_PNRBHeaderItem) : gettype($bookingDetails_PNRBHeaderItem)), __LINE__);
            }
        }
        $this->Header = $header;
        return $this;
    }
    /**
     * Add item to Header value
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \Sabre\UpdateReservation\StructType\BookingDetails_PNRB
     */
    public function addToHeader($item)
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new \InvalidArgumentException(sprintf('The Header property can only contain items of string, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Header[] = $item;
        return $this;
    }
    /**
     * Get RecordLocator value
     * @return string|null
     */
    public function getRecordLocator()
    {
        return $this->RecordLocator;
    }
    /**
     * Set RecordLocator value
     * @param string $recordLocator
     * @return \Sabre\UpdateReservation\StructType\BookingDetails_PNRB
     */
    public function setRecordLocator($recordLocator = null)
    {
        // validation for constraint: string
        if (!is_null($recordLocator) && !is_string($recordLocator)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($recordLocator)), __LINE__);
        }
        $this->RecordLocator = $recordLocator;
        return $this;
    }
    /**
     * Get CreationTimestamp value
     * @return string|null
     */
    public function getCreationTimestamp()
    {
        return $this->CreationTimestamp;
    }
    /**
     * Set CreationTimestamp value
     * @param string $creationTimestamp
     * @return \Sabre\UpdateReservation\StructType\BookingDetails_PNRB
     */
    public function setCreationTimestamp($creationTimestamp = null)
    {
        // validation for constraint: string
        if (!is_null($creationTimestamp) && !is_string($creationTimestamp)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($creationTimestamp)), __LINE__);
        }
        $this->CreationTimestamp = $creationTimestamp;
        return $this;
    }
    /**
     * Get SystemCreationTimestamp value
     * @return string|null
     */
    public function getSystemCreationTimestamp()
    {
        return $this->SystemCreationTimestamp;
    }
    /**
     * Set SystemCreationTimestamp value
     * @param string $systemCreationTimestamp
     * @return \Sabre\UpdateReservation\StructType\BookingDetails_PNRB
     */
    public function setSystemCreationTimestamp($systemCreationTimestamp = null)
    {
        // validation for constraint: string
        if (!is_null($systemCreationTimestamp) && !is_string($systemCreationTimestamp)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($systemCreationTimestamp)), __LINE__);
        }
        $this->SystemCreationTimestamp = $systemCreationTimestamp;
        return $this;
    }
    /**
     * Get CreationAgentID value
     * @return string|null
     */
    public function getCreationAgentID()
    {
        return $this->CreationAgentID;
    }
    /**
     * Set CreationAgentID value
     * @param string $creationAgentID
     * @return \Sabre\UpdateReservation\StructType\BookingDetails_PNRB
     */
    public function setCreationAgentID($creationAgentID = null)
    {
        // validation for constraint: string
        if (!is_null($creationAgentID) && !is_string($creationAgentID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($creationAgentID)), __LINE__);
        }
        $this->CreationAgentID = $creationAgentID;
        return $this;
    }
    /**
     * Get UpdateTimestamp value
     * @return string|null
     */
    public function getUpdateTimestamp()
    {
        return $this->UpdateTimestamp;
    }
    /**
     * Set UpdateTimestamp value
     * @param string $updateTimestamp
     * @return \Sabre\UpdateReservation\StructType\BookingDetails_PNRB
     */
    public function setUpdateTimestamp($updateTimestamp = null)
    {
        // validation for constraint: string
        if (!is_null($updateTimestamp) && !is_string($updateTimestamp)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($updateTimestamp)), __LINE__);
        }
        $this->UpdateTimestamp = $updateTimestamp;
        return $this;
    }
    /**
     * Get PNRSequence value
     * @return int|null
     */
    public function getPNRSequence()
    {
        return $this->PNRSequence;
    }
    /**
     * Set PNRSequence value
     * @param int $pNRSequence
     * @return \Sabre\UpdateReservation\StructType\BookingDetails_PNRB
     */
    public function setPNRSequence($pNRSequence = null)
    {
        // validation for constraint: maxInclusive
        if ($pNRSequence > 99999) {
            throw new \InvalidArgumentException(sprintf('Invalid value, the value must be inferior or equal to 99999, "%s" given', $pNRSequence), __LINE__);
        }
        // validation for constraint: minInclusive
        if ($pNRSequence < 0) {
            throw new \InvalidArgumentException(sprintf('Invalid value, the value must be superior or equal to 0, "%s" given', $pNRSequence), __LINE__);
        }
        // validation for constraint: int
        if (!is_null($pNRSequence) && !is_numeric($pNRSequence)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($pNRSequence)), __LINE__);
        }
        $this->PNRSequence = $pNRSequence;
        return $this;
    }
    /**
     * Get FlightsRange value
     * @return \Sabre\UpdateReservation\StructType\FlightsRange|null
     */
    public function getFlightsRange()
    {
        return $this->FlightsRange;
    }
    /**
     * Set FlightsRange value
     * @param \Sabre\UpdateReservation\StructType\FlightsRange $flightsRange
     * @return \Sabre\UpdateReservation\StructType\BookingDetails_PNRB
     */
    public function setFlightsRange(\Sabre\UpdateReservation\StructType\FlightsRange $flightsRange = null)
    {
        $this->FlightsRange = $flightsRange;
        return $this;
    }
    /**
     * Get ItineraryDate value
     * @return \Sabre\UpdateReservation\StructType\ItineraryDate|null
     */
    public function getItineraryDate()
    {
        return $this->ItineraryDate;
    }
    /**
     * Set ItineraryDate value
     * @param \Sabre\UpdateReservation\StructType\ItineraryDate $itineraryDate
     * @return \Sabre\UpdateReservation\StructType\BookingDetails_PNRB
     */
    public function setItineraryDate(\Sabre\UpdateReservation\StructType\ItineraryDate $itineraryDate = null)
    {
        $this->ItineraryDate = $itineraryDate;
        return $this;
    }
    /**
     * Get DivideSplitDetails value
     * @return \Sabre\UpdateReservation\StructType\DivideSplitDetails|null
     */
    public function getDivideSplitDetails()
    {
        return $this->DivideSplitDetails;
    }
    /**
     * Set DivideSplitDetails value
     * @param \Sabre\UpdateReservation\StructType\DivideSplitDetails $divideSplitDetails
     * @return \Sabre\UpdateReservation\StructType\BookingDetails_PNRB
     */
    public function setDivideSplitDetails(\Sabre\UpdateReservation\StructType\DivideSplitDetails $divideSplitDetails = null)
    {
        $this->DivideSplitDetails = $divideSplitDetails;
        return $this;
    }
    /**
     * Get EstimatedPurgeTimestamp value
     * @return string|null
     */
    public function getEstimatedPurgeTimestamp()
    {
        return $this->EstimatedPurgeTimestamp;
    }
    /**
     * Set EstimatedPurgeTimestamp value
     * @param string $estimatedPurgeTimestamp
     * @return \Sabre\UpdateReservation\StructType\BookingDetails_PNRB
     */
    public function setEstimatedPurgeTimestamp($estimatedPurgeTimestamp = null)
    {
        // validation for constraint: string
        if (!is_null($estimatedPurgeTimestamp) && !is_string($estimatedPurgeTimestamp)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($estimatedPurgeTimestamp)), __LINE__);
        }
        $this->EstimatedPurgeTimestamp = $estimatedPurgeTimestamp;
        return $this;
    }
    /**
     * Get UpdateToken value
     * @return string|null
     */
    public function getUpdateToken()
    {
        return $this->UpdateToken;
    }
    /**
     * Set UpdateToken value
     * @param string $updateToken
     * @return \Sabre\UpdateReservation\StructType\BookingDetails_PNRB
     */
    public function setUpdateToken($updateToken = null)
    {
        // validation for constraint: string
        if (!is_null($updateToken) && !is_string($updateToken)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($updateToken)), __LINE__);
        }
        $this->UpdateToken = $updateToken;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\BookingDetails_PNRB
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
