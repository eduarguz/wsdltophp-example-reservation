<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PreReservedSeat.PNRB StructType
 * @subpackage Structs
 */
class PreReservedSeat_PNRB extends AbstractStructBase
{
    /**
     * The SeatNumber
     * Meta informations extracted from the WSDL
     * - documentation: Seat number. Ex."7D"
     * @var string
     */
    public $SeatNumber;
    /**
     * The SmokingPrefOfferedIndicator
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $SmokingPrefOfferedIndicator;
    /**
     * The SeatTypeCode
     * Meta informations extracted from the WSDL
     * - documentation: Information about the seat. Ex."ARMI"
     * - minOccurs: 0
     * @var string
     */
    public $SeatTypeCode;
    /**
     * The BoardingPassIssueFlag
     * Meta informations extracted from the WSDL
     * - documentation: True/False indicator for the boarding pass issuance. Ex."TRUE"
     * - minOccurs: 0
     * @var bool
     */
    public $BoardingPassIssueFlag;
    /**
     * The SeatStatusCode
     * Meta informations extracted from the WSDL
     * - documentation: Current status of the seat request. Ex."HK"
     * - minOccurs: 0
     * @var string
     */
    public $SeatStatusCode;
    /**
     * The IsAEAssociated
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool
     */
    public $IsAEAssociated;
    /**
     * The IsPREdit
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool
     */
    public $IsPREdit;
    /**
     * The Cog
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\CogFlight_PNRB
     */
    public $Cog;
    /**
     * The CompartmentNumber
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $CompartmentNumber;
    /**
     * The BoardPoint
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $BoardPoint;
    /**
     * The OffPoint
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $OffPoint;
    /**
     * The DepartureTime
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $DepartureTime;
    /**
     * The ArrivalTime
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $ArrivalTime;
    /**
     * The Changed
     * Meta informations extracted from the WSDL
     * - documentation: "Changed" is used to indicate if the passenger's seat as been changed.
     * - minOccurs: 0
     * @var string
     */
    public $Changed;
    /**
     * The NameNumber
     * Meta informations extracted from the WSDL
     * - documentation: "NameNumber" is used return the passenger name number associated with the particular seat reservation.
     * - minOccurs: 0
     * @var string
     */
    public $NameNumber;
    /**
     * The id
     * Meta informations extracted from the WSDL
     * - pattern: [0-9]{1,10}
     * @var string
     */
    public $id;
    /**
     * The op
     * Meta informations extracted from the WSDL
     * - documentation: C = Create, U = Update, D = Delete
     * @var string
     */
    public $op;
    /**
     * Constructor method for PreReservedSeat.PNRB
     * @uses PreReservedSeat_PNRB::setSeatNumber()
     * @uses PreReservedSeat_PNRB::setSmokingPrefOfferedIndicator()
     * @uses PreReservedSeat_PNRB::setSeatTypeCode()
     * @uses PreReservedSeat_PNRB::setBoardingPassIssueFlag()
     * @uses PreReservedSeat_PNRB::setSeatStatusCode()
     * @uses PreReservedSeat_PNRB::setIsAEAssociated()
     * @uses PreReservedSeat_PNRB::setIsPREdit()
     * @uses PreReservedSeat_PNRB::setCog()
     * @uses PreReservedSeat_PNRB::setCompartmentNumber()
     * @uses PreReservedSeat_PNRB::setBoardPoint()
     * @uses PreReservedSeat_PNRB::setOffPoint()
     * @uses PreReservedSeat_PNRB::setDepartureTime()
     * @uses PreReservedSeat_PNRB::setArrivalTime()
     * @uses PreReservedSeat_PNRB::setChanged()
     * @uses PreReservedSeat_PNRB::setNameNumber()
     * @uses PreReservedSeat_PNRB::setId()
     * @uses PreReservedSeat_PNRB::setOp()
     * @param string $seatNumber
     * @param bool $smokingPrefOfferedIndicator
     * @param string $seatTypeCode
     * @param bool $boardingPassIssueFlag
     * @param string $seatStatusCode
     * @param bool $isAEAssociated
     * @param bool $isPREdit
     * @param \Sabre\UpdateReservation\StructType\CogFlight_PNRB $cog
     * @param string $compartmentNumber
     * @param string $boardPoint
     * @param string $offPoint
     * @param string $departureTime
     * @param string $arrivalTime
     * @param string $changed
     * @param string $nameNumber
     * @param string $id
     * @param string $op
     */
    public function __construct($seatNumber = null, $smokingPrefOfferedIndicator = null, $seatTypeCode = null, $boardingPassIssueFlag = null, $seatStatusCode = null, $isAEAssociated = null, $isPREdit = null, \Sabre\UpdateReservation\StructType\CogFlight_PNRB $cog = null, $compartmentNumber = null, $boardPoint = null, $offPoint = null, $departureTime = null, $arrivalTime = null, $changed = null, $nameNumber = null, $id = null, $op = null)
    {
        $this
            ->setSeatNumber($seatNumber)
            ->setSmokingPrefOfferedIndicator($smokingPrefOfferedIndicator)
            ->setSeatTypeCode($seatTypeCode)
            ->setBoardingPassIssueFlag($boardingPassIssueFlag)
            ->setSeatStatusCode($seatStatusCode)
            ->setIsAEAssociated($isAEAssociated)
            ->setIsPREdit($isPREdit)
            ->setCog($cog)
            ->setCompartmentNumber($compartmentNumber)
            ->setBoardPoint($boardPoint)
            ->setOffPoint($offPoint)
            ->setDepartureTime($departureTime)
            ->setArrivalTime($arrivalTime)
            ->setChanged($changed)
            ->setNameNumber($nameNumber)
            ->setId($id)
            ->setOp($op);
    }
    /**
     * Get SeatNumber value
     * @return string|null
     */
    public function getSeatNumber()
    {
        return $this->SeatNumber;
    }
    /**
     * Set SeatNumber value
     * @param string $seatNumber
     * @return \Sabre\UpdateReservation\StructType\PreReservedSeat_PNRB
     */
    public function setSeatNumber($seatNumber = null)
    {
        // validation for constraint: string
        if (!is_null($seatNumber) && !is_string($seatNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($seatNumber)), __LINE__);
        }
        $this->SeatNumber = $seatNumber;
        return $this;
    }
    /**
     * Get SmokingPrefOfferedIndicator value
     * @return bool|null
     */
    public function getSmokingPrefOfferedIndicator()
    {
        return $this->SmokingPrefOfferedIndicator;
    }
    /**
     * Set SmokingPrefOfferedIndicator value
     * @param bool $smokingPrefOfferedIndicator
     * @return \Sabre\UpdateReservation\StructType\PreReservedSeat_PNRB
     */
    public function setSmokingPrefOfferedIndicator($smokingPrefOfferedIndicator = null)
    {
        // validation for constraint: boolean
        if (!is_null($smokingPrefOfferedIndicator) && !is_bool($smokingPrefOfferedIndicator)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($smokingPrefOfferedIndicator)), __LINE__);
        }
        $this->SmokingPrefOfferedIndicator = $smokingPrefOfferedIndicator;
        return $this;
    }
    /**
     * Get SeatTypeCode value
     * @return string|null
     */
    public function getSeatTypeCode()
    {
        return $this->SeatTypeCode;
    }
    /**
     * Set SeatTypeCode value
     * @param string $seatTypeCode
     * @return \Sabre\UpdateReservation\StructType\PreReservedSeat_PNRB
     */
    public function setSeatTypeCode($seatTypeCode = null)
    {
        // validation for constraint: string
        if (!is_null($seatTypeCode) && !is_string($seatTypeCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($seatTypeCode)), __LINE__);
        }
        $this->SeatTypeCode = $seatTypeCode;
        return $this;
    }
    /**
     * Get BoardingPassIssueFlag value
     * @return bool|null
     */
    public function getBoardingPassIssueFlag()
    {
        return $this->BoardingPassIssueFlag;
    }
    /**
     * Set BoardingPassIssueFlag value
     * @param bool $boardingPassIssueFlag
     * @return \Sabre\UpdateReservation\StructType\PreReservedSeat_PNRB
     */
    public function setBoardingPassIssueFlag($boardingPassIssueFlag = null)
    {
        // validation for constraint: boolean
        if (!is_null($boardingPassIssueFlag) && !is_bool($boardingPassIssueFlag)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($boardingPassIssueFlag)), __LINE__);
        }
        $this->BoardingPassIssueFlag = $boardingPassIssueFlag;
        return $this;
    }
    /**
     * Get SeatStatusCode value
     * @return string|null
     */
    public function getSeatStatusCode()
    {
        return $this->SeatStatusCode;
    }
    /**
     * Set SeatStatusCode value
     * @param string $seatStatusCode
     * @return \Sabre\UpdateReservation\StructType\PreReservedSeat_PNRB
     */
    public function setSeatStatusCode($seatStatusCode = null)
    {
        // validation for constraint: string
        if (!is_null($seatStatusCode) && !is_string($seatStatusCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($seatStatusCode)), __LINE__);
        }
        $this->SeatStatusCode = $seatStatusCode;
        return $this;
    }
    /**
     * Get IsAEAssociated value
     * @return bool|null
     */
    public function getIsAEAssociated()
    {
        return $this->IsAEAssociated;
    }
    /**
     * Set IsAEAssociated value
     * @param bool $isAEAssociated
     * @return \Sabre\UpdateReservation\StructType\PreReservedSeat_PNRB
     */
    public function setIsAEAssociated($isAEAssociated = null)
    {
        // validation for constraint: boolean
        if (!is_null($isAEAssociated) && !is_bool($isAEAssociated)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($isAEAssociated)), __LINE__);
        }
        $this->IsAEAssociated = $isAEAssociated;
        return $this;
    }
    /**
     * Get IsPREdit value
     * @return bool|null
     */
    public function getIsPREdit()
    {
        return $this->IsPREdit;
    }
    /**
     * Set IsPREdit value
     * @param bool $isPREdit
     * @return \Sabre\UpdateReservation\StructType\PreReservedSeat_PNRB
     */
    public function setIsPREdit($isPREdit = null)
    {
        // validation for constraint: boolean
        if (!is_null($isPREdit) && !is_bool($isPREdit)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($isPREdit)), __LINE__);
        }
        $this->IsPREdit = $isPREdit;
        return $this;
    }
    /**
     * Get Cog value
     * @return \Sabre\UpdateReservation\StructType\CogFlight_PNRB|null
     */
    public function getCog()
    {
        return $this->Cog;
    }
    /**
     * Set Cog value
     * @param \Sabre\UpdateReservation\StructType\CogFlight_PNRB $cog
     * @return \Sabre\UpdateReservation\StructType\PreReservedSeat_PNRB
     */
    public function setCog(\Sabre\UpdateReservation\StructType\CogFlight_PNRB $cog = null)
    {
        $this->Cog = $cog;
        return $this;
    }
    /**
     * Get CompartmentNumber value
     * @return string|null
     */
    public function getCompartmentNumber()
    {
        return $this->CompartmentNumber;
    }
    /**
     * Set CompartmentNumber value
     * @param string $compartmentNumber
     * @return \Sabre\UpdateReservation\StructType\PreReservedSeat_PNRB
     */
    public function setCompartmentNumber($compartmentNumber = null)
    {
        // validation for constraint: string
        if (!is_null($compartmentNumber) && !is_string($compartmentNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($compartmentNumber)), __LINE__);
        }
        $this->CompartmentNumber = $compartmentNumber;
        return $this;
    }
    /**
     * Get BoardPoint value
     * @return string|null
     */
    public function getBoardPoint()
    {
        return $this->BoardPoint;
    }
    /**
     * Set BoardPoint value
     * @param string $boardPoint
     * @return \Sabre\UpdateReservation\StructType\PreReservedSeat_PNRB
     */
    public function setBoardPoint($boardPoint = null)
    {
        // validation for constraint: string
        if (!is_null($boardPoint) && !is_string($boardPoint)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($boardPoint)), __LINE__);
        }
        $this->BoardPoint = $boardPoint;
        return $this;
    }
    /**
     * Get OffPoint value
     * @return string|null
     */
    public function getOffPoint()
    {
        return $this->OffPoint;
    }
    /**
     * Set OffPoint value
     * @param string $offPoint
     * @return \Sabre\UpdateReservation\StructType\PreReservedSeat_PNRB
     */
    public function setOffPoint($offPoint = null)
    {
        // validation for constraint: string
        if (!is_null($offPoint) && !is_string($offPoint)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($offPoint)), __LINE__);
        }
        $this->OffPoint = $offPoint;
        return $this;
    }
    /**
     * Get DepartureTime value
     * @return string|null
     */
    public function getDepartureTime()
    {
        return $this->DepartureTime;
    }
    /**
     * Set DepartureTime value
     * @param string $departureTime
     * @return \Sabre\UpdateReservation\StructType\PreReservedSeat_PNRB
     */
    public function setDepartureTime($departureTime = null)
    {
        // validation for constraint: string
        if (!is_null($departureTime) && !is_string($departureTime)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($departureTime)), __LINE__);
        }
        $this->DepartureTime = $departureTime;
        return $this;
    }
    /**
     * Get ArrivalTime value
     * @return string|null
     */
    public function getArrivalTime()
    {
        return $this->ArrivalTime;
    }
    /**
     * Set ArrivalTime value
     * @param string $arrivalTime
     * @return \Sabre\UpdateReservation\StructType\PreReservedSeat_PNRB
     */
    public function setArrivalTime($arrivalTime = null)
    {
        // validation for constraint: string
        if (!is_null($arrivalTime) && !is_string($arrivalTime)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($arrivalTime)), __LINE__);
        }
        $this->ArrivalTime = $arrivalTime;
        return $this;
    }
    /**
     * Get Changed value
     * @return string|null
     */
    public function getChanged()
    {
        return $this->Changed;
    }
    /**
     * Set Changed value
     * @param string $changed
     * @return \Sabre\UpdateReservation\StructType\PreReservedSeat_PNRB
     */
    public function setChanged($changed = null)
    {
        // validation for constraint: string
        if (!is_null($changed) && !is_string($changed)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($changed)), __LINE__);
        }
        $this->Changed = $changed;
        return $this;
    }
    /**
     * Get NameNumber value
     * @return string|null
     */
    public function getNameNumber()
    {
        return $this->NameNumber;
    }
    /**
     * Set NameNumber value
     * @param string $nameNumber
     * @return \Sabre\UpdateReservation\StructType\PreReservedSeat_PNRB
     */
    public function setNameNumber($nameNumber = null)
    {
        // validation for constraint: string
        if (!is_null($nameNumber) && !is_string($nameNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($nameNumber)), __LINE__);
        }
        $this->NameNumber = $nameNumber;
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
     * @return \Sabre\UpdateReservation\StructType\PreReservedSeat_PNRB
     */
    public function setId($id = null)
    {
        // validation for constraint: pattern
        if (is_scalar($id) && !preg_match('/[0-9]{1,10}/', $id)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a scalar value that matches "[0-9]{1,10}", "%s" given', var_export($id, true)), __LINE__);
        }
        // validation for constraint: string
        if (!is_null($id) && !is_string($id)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($id)), __LINE__);
        }
        $this->id = $id;
        return $this;
    }
    /**
     * Get op value
     * @return string|null
     */
    public function getOp()
    {
        return $this->op;
    }
    /**
     * Set op value
     * @uses \Sabre\UpdateReservation\EnumType\OperationType_PNRB::valueIsValid()
     * @uses \Sabre\UpdateReservation\EnumType\OperationType_PNRB::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $op
     * @return \Sabre\UpdateReservation\StructType\PreReservedSeat_PNRB
     */
    public function setOp($op = null)
    {
        // validation for constraint: enumeration
        if (!\Sabre\UpdateReservation\EnumType\OperationType_PNRB::valueIsValid($op)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $op, implode(', ', \Sabre\UpdateReservation\EnumType\OperationType_PNRB::getValidValues())), __LINE__);
        }
        $this->op = $op;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\PreReservedSeat_PNRB
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
