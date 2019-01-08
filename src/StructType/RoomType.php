<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RoomType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Summary version of the RoomTypeType, initially created for the Travel Itinerary Message set.
 * @subpackage Structs
 */
class RoomType extends AbstractStructBase
{
    /**
     * The RoomTypeCode
     * Meta informations extracted from the WSDL
     * - documentation: Specific system room type code, ex: A1K, A1Q etc.
     * - minOccurs: 0
     * @var string
     */
    public $RoomTypeCode;
    /**
     * The NumberOfUnits
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $NumberOfUnits;
    /**
     * The ShortText
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $ShortText;
    /**
     * The RateOccupancyPerRoom
     * Meta informations extracted from the WSDL
     * - documentation: Indicates how many guests the room can accommodate for the provided rate.
     * - minOccurs: 0
     * @var int
     */
    public $RateOccupancyPerRoom;
    /**
     * The BedTypeDesc
     * Meta informations extracted from the WSDL
     * - documentation: Specifies the type of bed.
     * - minOccurs: 0
     * @var string
     */
    public $BedTypeDesc;
    /**
     * The NumOfBeds
     * Meta informations extracted from the WSDL
     * - documentation: Specifies the number of beds requested.
     * - minOccurs: 0
     * @var int
     */
    public $NumOfBeds;
    /**
     * Constructor method for RoomType
     * @uses RoomType::setRoomTypeCode()
     * @uses RoomType::setNumberOfUnits()
     * @uses RoomType::setShortText()
     * @uses RoomType::setRateOccupancyPerRoom()
     * @uses RoomType::setBedTypeDesc()
     * @uses RoomType::setNumOfBeds()
     * @param string $roomTypeCode
     * @param int $numberOfUnits
     * @param string $shortText
     * @param int $rateOccupancyPerRoom
     * @param string $bedTypeDesc
     * @param int $numOfBeds
     */
    public function __construct($roomTypeCode = null, $numberOfUnits = null, $shortText = null, $rateOccupancyPerRoom = null, $bedTypeDesc = null, $numOfBeds = null)
    {
        $this
            ->setRoomTypeCode($roomTypeCode)
            ->setNumberOfUnits($numberOfUnits)
            ->setShortText($shortText)
            ->setRateOccupancyPerRoom($rateOccupancyPerRoom)
            ->setBedTypeDesc($bedTypeDesc)
            ->setNumOfBeds($numOfBeds);
    }
    /**
     * Get RoomTypeCode value
     * @return string|null
     */
    public function getRoomTypeCode()
    {
        return $this->RoomTypeCode;
    }
    /**
     * Set RoomTypeCode value
     * @param string $roomTypeCode
     * @return \Sabre\UpdateReservation\StructType\RoomType
     */
    public function setRoomTypeCode($roomTypeCode = null)
    {
        // validation for constraint: string
        if (!is_null($roomTypeCode) && !is_string($roomTypeCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($roomTypeCode)), __LINE__);
        }
        $this->RoomTypeCode = $roomTypeCode;
        return $this;
    }
    /**
     * Get NumberOfUnits value
     * @return int|null
     */
    public function getNumberOfUnits()
    {
        return $this->NumberOfUnits;
    }
    /**
     * Set NumberOfUnits value
     * @param int $numberOfUnits
     * @return \Sabre\UpdateReservation\StructType\RoomType
     */
    public function setNumberOfUnits($numberOfUnits = null)
    {
        // validation for constraint: int
        if (!is_null($numberOfUnits) && !is_numeric($numberOfUnits)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($numberOfUnits)), __LINE__);
        }
        $this->NumberOfUnits = $numberOfUnits;
        return $this;
    }
    /**
     * Get ShortText value
     * @return string|null
     */
    public function getShortText()
    {
        return $this->ShortText;
    }
    /**
     * Set ShortText value
     * @param string $shortText
     * @return \Sabre\UpdateReservation\StructType\RoomType
     */
    public function setShortText($shortText = null)
    {
        // validation for constraint: string
        if (!is_null($shortText) && !is_string($shortText)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($shortText)), __LINE__);
        }
        $this->ShortText = $shortText;
        return $this;
    }
    /**
     * Get RateOccupancyPerRoom value
     * @return int|null
     */
    public function getRateOccupancyPerRoom()
    {
        return $this->RateOccupancyPerRoom;
    }
    /**
     * Set RateOccupancyPerRoom value
     * @param int $rateOccupancyPerRoom
     * @return \Sabre\UpdateReservation\StructType\RoomType
     */
    public function setRateOccupancyPerRoom($rateOccupancyPerRoom = null)
    {
        // validation for constraint: int
        if (!is_null($rateOccupancyPerRoom) && !is_numeric($rateOccupancyPerRoom)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($rateOccupancyPerRoom)), __LINE__);
        }
        $this->RateOccupancyPerRoom = $rateOccupancyPerRoom;
        return $this;
    }
    /**
     * Get BedTypeDesc value
     * @return string|null
     */
    public function getBedTypeDesc()
    {
        return $this->BedTypeDesc;
    }
    /**
     * Set BedTypeDesc value
     * @param string $bedTypeDesc
     * @return \Sabre\UpdateReservation\StructType\RoomType
     */
    public function setBedTypeDesc($bedTypeDesc = null)
    {
        // validation for constraint: string
        if (!is_null($bedTypeDesc) && !is_string($bedTypeDesc)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($bedTypeDesc)), __LINE__);
        }
        $this->BedTypeDesc = $bedTypeDesc;
        return $this;
    }
    /**
     * Get NumOfBeds value
     * @return int|null
     */
    public function getNumOfBeds()
    {
        return $this->NumOfBeds;
    }
    /**
     * Set NumOfBeds value
     * @param int $numOfBeds
     * @return \Sabre\UpdateReservation\StructType\RoomType
     */
    public function setNumOfBeds($numOfBeds = null)
    {
        // validation for constraint: int
        if (!is_null($numOfBeds) && !is_numeric($numOfBeds)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($numOfBeds)), __LINE__);
        }
        $this->NumOfBeds = $numOfBeds;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\RoomType
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
