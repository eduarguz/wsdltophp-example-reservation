<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for HotelType StructType
 * @subpackage Structs
 */
class HotelType extends AbstractStructBase
{
    /**
     * The Reservation
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\Reservation
     */
    public $Reservation;
    /**
     * The AdditionalInformation
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\AdditionalInformation
     */
    public $AdditionalInformation;
    /**
     * The SegmentText
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $SegmentText;
    /**
     * The index
     * Meta informations extracted from the WSDL
     * - documentation: Used for Numeric values, from 1 to 9999 inclusive. | Used for Numeric values, from 1 to 9999 inclusive.
     * - maxInclusive: 99999
     * - minInclusive: 0
     * @var int
     */
    public $index;
    /**
     * The id
     * @var string
     */
    public $id;
    /**
     * The sequence
     * Meta informations extracted from the WSDL
     * - documentation: Identifies sequence number of Itinerary
     * @var int
     */
    public $sequence;
    /**
     * The isPast
     * Meta informations extracted from the WSDL
     * - documentation: It returns information if current element is past or not.
     * - use: optional
     * @var bool
     */
    public $isPast;
    /**
     * Constructor method for HotelType
     * @uses HotelType::setReservation()
     * @uses HotelType::setAdditionalInformation()
     * @uses HotelType::setSegmentText()
     * @uses HotelType::setIndex()
     * @uses HotelType::setId()
     * @uses HotelType::setSequence()
     * @uses HotelType::setIsPast()
     * @param \Sabre\UpdateReservation\StructType\Reservation $reservation
     * @param \Sabre\UpdateReservation\StructType\AdditionalInformation $additionalInformation
     * @param string $segmentText
     * @param int $index
     * @param string $id
     * @param int $sequence
     * @param bool $isPast
     */
    public function __construct(\Sabre\UpdateReservation\StructType\Reservation $reservation = null, \Sabre\UpdateReservation\StructType\AdditionalInformation $additionalInformation = null, $segmentText = null, $index = null, $id = null, $sequence = null, $isPast = null)
    {
        $this
            ->setReservation($reservation)
            ->setAdditionalInformation($additionalInformation)
            ->setSegmentText($segmentText)
            ->setIndex($index)
            ->setId($id)
            ->setSequence($sequence)
            ->setIsPast($isPast);
    }
    /**
     * Get Reservation value
     * @return \Sabre\UpdateReservation\StructType\Reservation|null
     */
    public function getReservation()
    {
        return $this->Reservation;
    }
    /**
     * Set Reservation value
     * @param \Sabre\UpdateReservation\StructType\Reservation $reservation
     * @return \Sabre\UpdateReservation\StructType\HotelType
     */
    public function setReservation(\Sabre\UpdateReservation\StructType\Reservation $reservation = null)
    {
        $this->Reservation = $reservation;
        return $this;
    }
    /**
     * Get AdditionalInformation value
     * @return \Sabre\UpdateReservation\StructType\AdditionalInformation|null
     */
    public function getAdditionalInformation()
    {
        return $this->AdditionalInformation;
    }
    /**
     * Set AdditionalInformation value
     * @param \Sabre\UpdateReservation\StructType\AdditionalInformation $additionalInformation
     * @return \Sabre\UpdateReservation\StructType\HotelType
     */
    public function setAdditionalInformation(\Sabre\UpdateReservation\StructType\AdditionalInformation $additionalInformation = null)
    {
        $this->AdditionalInformation = $additionalInformation;
        return $this;
    }
    /**
     * Get SegmentText value
     * @return string|null
     */
    public function getSegmentText()
    {
        return $this->SegmentText;
    }
    /**
     * Set SegmentText value
     * @param string $segmentText
     * @return \Sabre\UpdateReservation\StructType\HotelType
     */
    public function setSegmentText($segmentText = null)
    {
        // validation for constraint: string
        if (!is_null($segmentText) && !is_string($segmentText)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($segmentText)), __LINE__);
        }
        $this->SegmentText = $segmentText;
        return $this;
    }
    /**
     * Get index value
     * @return int|null
     */
    public function getIndex()
    {
        return $this->index;
    }
    /**
     * Set index value
     * @param int $index
     * @return \Sabre\UpdateReservation\StructType\HotelType
     */
    public function setIndex($index = null)
    {
        // validation for constraint: maxInclusive
        if ($index > 99999) {
            throw new \InvalidArgumentException(sprintf('Invalid value, the value must be inferior or equal to 99999, "%s" given', $index), __LINE__);
        }
        // validation for constraint: minInclusive
        if ($index < 0) {
            throw new \InvalidArgumentException(sprintf('Invalid value, the value must be superior or equal to 0, "%s" given', $index), __LINE__);
        }
        // validation for constraint: int
        if (!is_null($index) && !is_numeric($index)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($index)), __LINE__);
        }
        $this->index = $index;
        return $this;
    }
    /**
     * Get id value
     * @return string|null
     */
    public function getId()
    {
        return $this->id;
    }
    /**
     * Set id value
     * @param string $id
     * @return \Sabre\UpdateReservation\StructType\HotelType
     */
    public function setId($id = null)
    {
        // validation for constraint: string
        if (!is_null($id) && !is_string($id)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($id)), __LINE__);
        }
        $this->id = $id;
        return $this;
    }
    /**
     * Get sequence value
     * @return int|null
     */
    public function getSequence()
    {
        return $this->sequence;
    }
    /**
     * Set sequence value
     * @param int $sequence
     * @return \Sabre\UpdateReservation\StructType\HotelType
     */
    public function setSequence($sequence = null)
    {
        // validation for constraint: int
        if (!is_null($sequence) && !is_numeric($sequence)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($sequence)), __LINE__);
        }
        $this->sequence = $sequence;
        return $this;
    }
    /**
     * Get isPast value
     * @return bool|null
     */
    public function getIsPast()
    {
        return $this->isPast;
    }
    /**
     * Set isPast value
     * @param bool $isPast
     * @return \Sabre\UpdateReservation\StructType\HotelType
     */
    public function setIsPast($isPast = null)
    {
        // validation for constraint: boolean
        if (!is_null($isPast) && !is_bool($isPast)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($isPast)), __LINE__);
        }
        $this->isPast = $isPast;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\HotelType
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
