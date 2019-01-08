<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RoomInformation StructType
 * @subpackage Structs
 */
class RoomInformation extends BasicRoom
{
    /**
     * The Guests
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\Guests
     */
    public $Guests;
    /**
     * The RoomDescription
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\RoomDescription
     */
    public $RoomDescription;
    /**
     * The RoomExtras
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\RoomExtras
     */
    public $RoomExtras;
    /**
     * The ConfirmationCode
     * Meta informations extracted from the WSDL
     * - documentation: Room level Booking Confirmation Code if it exists
     * - minOccurs: 0
     * @var string
     */
    public $ConfirmationCode;
    /**
     * The CancellationCode
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var mixed
     */
    public $CancellationCode;
    /**
     * The BookingStatus
     * Meta informations extracted from the WSDL
     * - documentation: Room Level Booking Status
     * - minOccurs: 0
     * @var string
     */
    public $BookingStatus;
    /**
     * The RatePlan
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\RatePlanType
     */
    public $RatePlan;
    /**
     * The ValueAdds
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\ValueAdds
     */
    public $ValueAdds;
    /**
     * The SpecialInstructions
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\SpecialInstructions
     */
    public $SpecialInstructions;
    /**
     * The SearchParameters
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\LodgingSearchParameters
     */
    public $SearchParameters;
    /**
     * The RoomTypeCode
     * Meta informations extracted from the WSDL
     * - use: optional
     * @var string
     */
    public $RoomTypeCode;
    /**
     * The RoomType
     * Meta informations extracted from the WSDL
     * - use: optional
     * @var string
     */
    public $RoomType;
    /**
     * The InvBlockCode
     * Meta informations extracted from the WSDL
     * - use: optional
     * @var string
     */
    public $InvBlockCode;
    /**
     * The RoomCategory
     * Meta informations extracted from the WSDL
     * - use: optional
     * @var string
     */
    public $RoomCategory;
    /**
     * The RoomId
     * Meta informations extracted from the WSDL
     * - use: optional
     * @var string
     */
    public $RoomId;
    /**
     * The SegmentNumber
     * Meta informations extracted from the WSDL
     * - use: optional
     * @var int
     */
    public $SegmentNumber;
    /**
     * The Floor
     * Meta informations extracted from the WSDL
     * - use: optional
     * @var string
     */
    public $Floor;
    /**
     * The RoomViewCode
     * Meta informations extracted from the WSDL
     * - use: optional
     * @var string
     */
    public $RoomViewCode;
    /**
     * The SharedRoomInd
     * Meta informations extracted from the WSDL
     * - use: optional
     * @var bool
     */
    public $SharedRoomInd;
    /**
     * The Action
     * Meta informations extracted from the WSDL
     * - use: optional
     * @var string
     */
    public $Action;
    /**
     * Constructor method for RoomInformation
     * @uses RoomInformation::setGuests()
     * @uses RoomInformation::setRoomDescription()
     * @uses RoomInformation::setRoomExtras()
     * @uses RoomInformation::setConfirmationCode()
     * @uses RoomInformation::setCancellationCode()
     * @uses RoomInformation::setBookingStatus()
     * @uses RoomInformation::setRatePlan()
     * @uses RoomInformation::setValueAdds()
     * @uses RoomInformation::setSpecialInstructions()
     * @uses RoomInformation::setSearchParameters()
     * @uses RoomInformation::setRoomTypeCode()
     * @uses RoomInformation::setRoomType()
     * @uses RoomInformation::setInvBlockCode()
     * @uses RoomInformation::setRoomCategory()
     * @uses RoomInformation::setRoomId()
     * @uses RoomInformation::setSegmentNumber()
     * @uses RoomInformation::setFloor()
     * @uses RoomInformation::setRoomViewCode()
     * @uses RoomInformation::setSharedRoomInd()
     * @uses RoomInformation::setAction()
     * @param \Sabre\UpdateReservation\StructType\Guests $guests
     * @param \Sabre\UpdateReservation\StructType\RoomDescription $roomDescription
     * @param \Sabre\UpdateReservation\StructType\RoomExtras $roomExtras
     * @param string $confirmationCode
     * @param mixed $cancellationCode
     * @param string $bookingStatus
     * @param \Sabre\UpdateReservation\StructType\RatePlanType $ratePlan
     * @param \Sabre\UpdateReservation\StructType\ValueAdds $valueAdds
     * @param \Sabre\UpdateReservation\StructType\SpecialInstructions $specialInstructions
     * @param \Sabre\UpdateReservation\StructType\LodgingSearchParameters $searchParameters
     * @param string $roomTypeCode
     * @param string $roomType
     * @param string $invBlockCode
     * @param string $roomCategory
     * @param string $roomId
     * @param int $segmentNumber
     * @param string $floor
     * @param string $roomViewCode
     * @param bool $sharedRoomInd
     * @param string $action
     */
    public function __construct(\Sabre\UpdateReservation\StructType\Guests $guests = null, \Sabre\UpdateReservation\StructType\RoomDescription $roomDescription = null, \Sabre\UpdateReservation\StructType\RoomExtras $roomExtras = null, $confirmationCode = null, $cancellationCode = null, $bookingStatus = null, \Sabre\UpdateReservation\StructType\RatePlanType $ratePlan = null, \Sabre\UpdateReservation\StructType\ValueAdds $valueAdds = null, \Sabre\UpdateReservation\StructType\SpecialInstructions $specialInstructions = null, \Sabre\UpdateReservation\StructType\LodgingSearchParameters $searchParameters = null, $roomTypeCode = null, $roomType = null, $invBlockCode = null, $roomCategory = null, $roomId = null, $segmentNumber = null, $floor = null, $roomViewCode = null, $sharedRoomInd = null, $action = null)
    {
        $this
            ->setGuests($guests)
            ->setRoomDescription($roomDescription)
            ->setRoomExtras($roomExtras)
            ->setConfirmationCode($confirmationCode)
            ->setCancellationCode($cancellationCode)
            ->setBookingStatus($bookingStatus)
            ->setRatePlan($ratePlan)
            ->setValueAdds($valueAdds)
            ->setSpecialInstructions($specialInstructions)
            ->setSearchParameters($searchParameters)
            ->setRoomTypeCode($roomTypeCode)
            ->setRoomType($roomType)
            ->setInvBlockCode($invBlockCode)
            ->setRoomCategory($roomCategory)
            ->setRoomId($roomId)
            ->setSegmentNumber($segmentNumber)
            ->setFloor($floor)
            ->setRoomViewCode($roomViewCode)
            ->setSharedRoomInd($sharedRoomInd)
            ->setAction($action);
    }
    /**
     * Get Guests value
     * @return \Sabre\UpdateReservation\StructType\Guests|null
     */
    public function getGuests()
    {
        return $this->Guests;
    }
    /**
     * Set Guests value
     * @param \Sabre\UpdateReservation\StructType\Guests $guests
     * @return \Sabre\UpdateReservation\StructType\RoomInformation
     */
    public function setGuests(\Sabre\UpdateReservation\StructType\Guests $guests = null)
    {
        $this->Guests = $guests;
        return $this;
    }
    /**
     * Get RoomDescription value
     * @return \Sabre\UpdateReservation\StructType\RoomDescription|null
     */
    public function getRoomDescription()
    {
        return $this->RoomDescription;
    }
    /**
     * Set RoomDescription value
     * @param \Sabre\UpdateReservation\StructType\RoomDescription $roomDescription
     * @return \Sabre\UpdateReservation\StructType\RoomInformation
     */
    public function setRoomDescription(\Sabre\UpdateReservation\StructType\RoomDescription $roomDescription = null)
    {
        $this->RoomDescription = $roomDescription;
        return $this;
    }
    /**
     * Get RoomExtras value
     * @return \Sabre\UpdateReservation\StructType\RoomExtras|null
     */
    public function getRoomExtras()
    {
        return $this->RoomExtras;
    }
    /**
     * Set RoomExtras value
     * @param \Sabre\UpdateReservation\StructType\RoomExtras $roomExtras
     * @return \Sabre\UpdateReservation\StructType\RoomInformation
     */
    public function setRoomExtras(\Sabre\UpdateReservation\StructType\RoomExtras $roomExtras = null)
    {
        $this->RoomExtras = $roomExtras;
        return $this;
    }
    /**
     * Get ConfirmationCode value
     * @return string|null
     */
    public function getConfirmationCode()
    {
        return $this->ConfirmationCode;
    }
    /**
     * Set ConfirmationCode value
     * @param string $confirmationCode
     * @return \Sabre\UpdateReservation\StructType\RoomInformation
     */
    public function setConfirmationCode($confirmationCode = null)
    {
        // validation for constraint: string
        if (!is_null($confirmationCode) && !is_string($confirmationCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($confirmationCode)), __LINE__);
        }
        $this->ConfirmationCode = $confirmationCode;
        return $this;
    }
    /**
     * Get CancellationCode value
     * @return mixed|null
     */
    public function getCancellationCode()
    {
        return $this->CancellationCode;
    }
    /**
     * Set CancellationCode value
     * @param mixed $cancellationCode
     * @return \Sabre\UpdateReservation\StructType\RoomInformation
     */
    public function setCancellationCode($cancellationCode = null)
    {
        $this->CancellationCode = $cancellationCode;
        return $this;
    }
    /**
     * Get BookingStatus value
     * @return string|null
     */
    public function getBookingStatus()
    {
        return $this->BookingStatus;
    }
    /**
     * Set BookingStatus value
     * @param string $bookingStatus
     * @return \Sabre\UpdateReservation\StructType\RoomInformation
     */
    public function setBookingStatus($bookingStatus = null)
    {
        // validation for constraint: string
        if (!is_null($bookingStatus) && !is_string($bookingStatus)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($bookingStatus)), __LINE__);
        }
        $this->BookingStatus = $bookingStatus;
        return $this;
    }
    /**
     * Get RatePlan value
     * @return \Sabre\UpdateReservation\StructType\RatePlanType|null
     */
    public function getRatePlan()
    {
        return $this->RatePlan;
    }
    /**
     * Set RatePlan value
     * @param \Sabre\UpdateReservation\StructType\RatePlanType $ratePlan
     * @return \Sabre\UpdateReservation\StructType\RoomInformation
     */
    public function setRatePlan(\Sabre\UpdateReservation\StructType\RatePlanType $ratePlan = null)
    {
        $this->RatePlan = $ratePlan;
        return $this;
    }
    /**
     * Get ValueAdds value
     * @return \Sabre\UpdateReservation\StructType\ValueAdds|null
     */
    public function getValueAdds()
    {
        return $this->ValueAdds;
    }
    /**
     * Set ValueAdds value
     * @param \Sabre\UpdateReservation\StructType\ValueAdds $valueAdds
     * @return \Sabre\UpdateReservation\StructType\RoomInformation
     */
    public function setValueAdds(\Sabre\UpdateReservation\StructType\ValueAdds $valueAdds = null)
    {
        $this->ValueAdds = $valueAdds;
        return $this;
    }
    /**
     * Get SpecialInstructions value
     * @return \Sabre\UpdateReservation\StructType\SpecialInstructions|null
     */
    public function getSpecialInstructions()
    {
        return $this->SpecialInstructions;
    }
    /**
     * Set SpecialInstructions value
     * @param \Sabre\UpdateReservation\StructType\SpecialInstructions $specialInstructions
     * @return \Sabre\UpdateReservation\StructType\RoomInformation
     */
    public function setSpecialInstructions(\Sabre\UpdateReservation\StructType\SpecialInstructions $specialInstructions = null)
    {
        $this->SpecialInstructions = $specialInstructions;
        return $this;
    }
    /**
     * Get SearchParameters value
     * @return \Sabre\UpdateReservation\StructType\LodgingSearchParameters|null
     */
    public function getSearchParameters()
    {
        return $this->SearchParameters;
    }
    /**
     * Set SearchParameters value
     * @param \Sabre\UpdateReservation\StructType\LodgingSearchParameters $searchParameters
     * @return \Sabre\UpdateReservation\StructType\RoomInformation
     */
    public function setSearchParameters(\Sabre\UpdateReservation\StructType\LodgingSearchParameters $searchParameters = null)
    {
        $this->SearchParameters = $searchParameters;
        return $this;
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
     * @return \Sabre\UpdateReservation\StructType\RoomInformation
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
     * Get RoomType value
     * @return string|null
     */
    public function getRoomType()
    {
        return $this->RoomType;
    }
    /**
     * Set RoomType value
     * @param string $roomType
     * @return \Sabre\UpdateReservation\StructType\RoomInformation
     */
    public function setRoomType($roomType = null)
    {
        // validation for constraint: string
        if (!is_null($roomType) && !is_string($roomType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($roomType)), __LINE__);
        }
        $this->RoomType = $roomType;
        return $this;
    }
    /**
     * Get InvBlockCode value
     * @return string|null
     */
    public function getInvBlockCode()
    {
        return $this->InvBlockCode;
    }
    /**
     * Set InvBlockCode value
     * @param string $invBlockCode
     * @return \Sabre\UpdateReservation\StructType\RoomInformation
     */
    public function setInvBlockCode($invBlockCode = null)
    {
        // validation for constraint: string
        if (!is_null($invBlockCode) && !is_string($invBlockCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($invBlockCode)), __LINE__);
        }
        $this->InvBlockCode = $invBlockCode;
        return $this;
    }
    /**
     * Get RoomCategory value
     * @return string|null
     */
    public function getRoomCategory()
    {
        return $this->RoomCategory;
    }
    /**
     * Set RoomCategory value
     * @param string $roomCategory
     * @return \Sabre\UpdateReservation\StructType\RoomInformation
     */
    public function setRoomCategory($roomCategory = null)
    {
        // validation for constraint: string
        if (!is_null($roomCategory) && !is_string($roomCategory)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($roomCategory)), __LINE__);
        }
        $this->RoomCategory = $roomCategory;
        return $this;
    }
    /**
     * Get RoomId value
     * @return string|null
     */
    public function getRoomId()
    {
        return $this->RoomId;
    }
    /**
     * Set RoomId value
     * @param string $roomId
     * @return \Sabre\UpdateReservation\StructType\RoomInformation
     */
    public function setRoomId($roomId = null)
    {
        // validation for constraint: string
        if (!is_null($roomId) && !is_string($roomId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($roomId)), __LINE__);
        }
        $this->RoomId = $roomId;
        return $this;
    }
    /**
     * Get SegmentNumber value
     * @return int|null
     */
    public function getSegmentNumber()
    {
        return $this->SegmentNumber;
    }
    /**
     * Set SegmentNumber value
     * @param int $segmentNumber
     * @return \Sabre\UpdateReservation\StructType\RoomInformation
     */
    public function setSegmentNumber($segmentNumber = null)
    {
        // validation for constraint: int
        if (!is_null($segmentNumber) && !is_numeric($segmentNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($segmentNumber)), __LINE__);
        }
        $this->SegmentNumber = $segmentNumber;
        return $this;
    }
    /**
     * Get Floor value
     * @return string|null
     */
    public function getFloor()
    {
        return $this->Floor;
    }
    /**
     * Set Floor value
     * @param string $floor
     * @return \Sabre\UpdateReservation\StructType\RoomInformation
     */
    public function setFloor($floor = null)
    {
        // validation for constraint: string
        if (!is_null($floor) && !is_string($floor)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($floor)), __LINE__);
        }
        $this->Floor = $floor;
        return $this;
    }
    /**
     * Get RoomViewCode value
     * @return string|null
     */
    public function getRoomViewCode()
    {
        return $this->RoomViewCode;
    }
    /**
     * Set RoomViewCode value
     * @param string $roomViewCode
     * @return \Sabre\UpdateReservation\StructType\RoomInformation
     */
    public function setRoomViewCode($roomViewCode = null)
    {
        // validation for constraint: string
        if (!is_null($roomViewCode) && !is_string($roomViewCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($roomViewCode)), __LINE__);
        }
        $this->RoomViewCode = $roomViewCode;
        return $this;
    }
    /**
     * Get SharedRoomInd value
     * @return bool|null
     */
    public function getSharedRoomInd()
    {
        return $this->SharedRoomInd;
    }
    /**
     * Set SharedRoomInd value
     * @param bool $sharedRoomInd
     * @return \Sabre\UpdateReservation\StructType\RoomInformation
     */
    public function setSharedRoomInd($sharedRoomInd = null)
    {
        // validation for constraint: boolean
        if (!is_null($sharedRoomInd) && !is_bool($sharedRoomInd)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($sharedRoomInd)), __LINE__);
        }
        $this->SharedRoomInd = $sharedRoomInd;
        return $this;
    }
    /**
     * Get Action value
     * @return string|null
     */
    public function getAction()
    {
        return $this->Action;
    }
    /**
     * Set Action value
     * @uses \Sabre\UpdateReservation\EnumType\UpdateActionCodeForRoom::valueIsValid()
     * @uses \Sabre\UpdateReservation\EnumType\UpdateActionCodeForRoom::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $action
     * @return \Sabre\UpdateReservation\StructType\RoomInformation
     */
    public function setAction($action = null)
    {
        // validation for constraint: enumeration
        if (!\Sabre\UpdateReservation\EnumType\UpdateActionCodeForRoom::valueIsValid($action)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $action, implode(', ', \Sabre\UpdateReservation\EnumType\UpdateActionCodeForRoom::getValidValues())), __LINE__);
        }
        $this->Action = $action;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\RoomInformation
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
