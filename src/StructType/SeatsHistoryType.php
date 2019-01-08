<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SeatsHistoryType StructType
 * @subpackage Structs
 */
class SeatsHistoryType extends SeatRequest_PNRB
{
    /**
     * The HistoryAction
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $HistoryAction;
    /**
     * The SeatNumber
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
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
     * - minOccurs: 0
     * @var string
     */
    public $SeatTypeCode;
    /**
     * The BoardingPassIssueFlag
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $BoardingPassIssueFlag;
    /**
     * The SeatStatusCode
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $SeatStatusCode;
    /**
     * Constructor method for SeatsHistoryType
     * @uses SeatsHistoryType::setHistoryAction()
     * @uses SeatsHistoryType::setSeatNumber()
     * @uses SeatsHistoryType::setSmokingPrefOfferedIndicator()
     * @uses SeatsHistoryType::setSeatTypeCode()
     * @uses SeatsHistoryType::setBoardingPassIssueFlag()
     * @uses SeatsHistoryType::setSeatStatusCode()
     * @param string $historyAction
     * @param string $seatNumber
     * @param bool $smokingPrefOfferedIndicator
     * @param string $seatTypeCode
     * @param bool $boardingPassIssueFlag
     * @param string $seatStatusCode
     */
    public function __construct($historyAction = null, $seatNumber = null, $smokingPrefOfferedIndicator = null, $seatTypeCode = null, $boardingPassIssueFlag = null, $seatStatusCode = null)
    {
        $this
            ->setHistoryAction($historyAction)
            ->setSeatNumber($seatNumber)
            ->setSmokingPrefOfferedIndicator($smokingPrefOfferedIndicator)
            ->setSeatTypeCode($seatTypeCode)
            ->setBoardingPassIssueFlag($boardingPassIssueFlag)
            ->setSeatStatusCode($seatStatusCode);
    }
    /**
     * Get HistoryAction value
     * @return string|null
     */
    public function getHistoryAction()
    {
        return $this->HistoryAction;
    }
    /**
     * Set HistoryAction value
     * @param string $historyAction
     * @return \Sabre\UpdateReservation\StructType\SeatsHistoryType
     */
    public function setHistoryAction($historyAction = null)
    {
        // validation for constraint: string
        if (!is_null($historyAction) && !is_string($historyAction)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($historyAction)), __LINE__);
        }
        $this->HistoryAction = $historyAction;
        return $this;
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
     * @return \Sabre\UpdateReservation\StructType\SeatsHistoryType
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
     * @return \Sabre\UpdateReservation\StructType\SeatsHistoryType
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
     * @return \Sabre\UpdateReservation\StructType\SeatsHistoryType
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
     * @return \Sabre\UpdateReservation\StructType\SeatsHistoryType
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
     * @return \Sabre\UpdateReservation\StructType\SeatsHistoryType
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
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\SeatsHistoryType
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
