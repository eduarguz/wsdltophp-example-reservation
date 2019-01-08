<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BSGCounterHistoryType StructType
 * @subpackage Structs
 */
class BSGCounterHistoryType extends AbstractStructBase
{
    /**
     * The HistoryAction
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $HistoryAction;
    /**
     * The CurBookingLevel
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $CurBookingLevel;
    /**
     * The OrigBookingLevel
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $OrigBookingLevel;
    /**
     * The SeatsAssocSold
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $SeatsAssocSold;
    /**
     * The SeatsCurrAvail
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $SeatsCurrAvail;
    /**
     * The TotalItemCount
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $TotalItemCount;
    /**
     * Constructor method for BSGCounterHistoryType
     * @uses BSGCounterHistoryType::setHistoryAction()
     * @uses BSGCounterHistoryType::setCurBookingLevel()
     * @uses BSGCounterHistoryType::setOrigBookingLevel()
     * @uses BSGCounterHistoryType::setSeatsAssocSold()
     * @uses BSGCounterHistoryType::setSeatsCurrAvail()
     * @uses BSGCounterHistoryType::setTotalItemCount()
     * @param string $historyAction
     * @param int $curBookingLevel
     * @param int $origBookingLevel
     * @param int $seatsAssocSold
     * @param int $seatsCurrAvail
     * @param int $totalItemCount
     */
    public function __construct($historyAction = null, $curBookingLevel = null, $origBookingLevel = null, $seatsAssocSold = null, $seatsCurrAvail = null, $totalItemCount = null)
    {
        $this
            ->setHistoryAction($historyAction)
            ->setCurBookingLevel($curBookingLevel)
            ->setOrigBookingLevel($origBookingLevel)
            ->setSeatsAssocSold($seatsAssocSold)
            ->setSeatsCurrAvail($seatsCurrAvail)
            ->setTotalItemCount($totalItemCount);
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
     * @return \Sabre\UpdateReservation\StructType\BSGCounterHistoryType
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
     * Get CurBookingLevel value
     * @return int|null
     */
    public function getCurBookingLevel()
    {
        return $this->CurBookingLevel;
    }
    /**
     * Set CurBookingLevel value
     * @param int $curBookingLevel
     * @return \Sabre\UpdateReservation\StructType\BSGCounterHistoryType
     */
    public function setCurBookingLevel($curBookingLevel = null)
    {
        // validation for constraint: int
        if (!is_null($curBookingLevel) && !is_numeric($curBookingLevel)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($curBookingLevel)), __LINE__);
        }
        $this->CurBookingLevel = $curBookingLevel;
        return $this;
    }
    /**
     * Get OrigBookingLevel value
     * @return int|null
     */
    public function getOrigBookingLevel()
    {
        return $this->OrigBookingLevel;
    }
    /**
     * Set OrigBookingLevel value
     * @param int $origBookingLevel
     * @return \Sabre\UpdateReservation\StructType\BSGCounterHistoryType
     */
    public function setOrigBookingLevel($origBookingLevel = null)
    {
        // validation for constraint: int
        if (!is_null($origBookingLevel) && !is_numeric($origBookingLevel)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($origBookingLevel)), __LINE__);
        }
        $this->OrigBookingLevel = $origBookingLevel;
        return $this;
    }
    /**
     * Get SeatsAssocSold value
     * @return int|null
     */
    public function getSeatsAssocSold()
    {
        return $this->SeatsAssocSold;
    }
    /**
     * Set SeatsAssocSold value
     * @param int $seatsAssocSold
     * @return \Sabre\UpdateReservation\StructType\BSGCounterHistoryType
     */
    public function setSeatsAssocSold($seatsAssocSold = null)
    {
        // validation for constraint: int
        if (!is_null($seatsAssocSold) && !is_numeric($seatsAssocSold)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($seatsAssocSold)), __LINE__);
        }
        $this->SeatsAssocSold = $seatsAssocSold;
        return $this;
    }
    /**
     * Get SeatsCurrAvail value
     * @return int|null
     */
    public function getSeatsCurrAvail()
    {
        return $this->SeatsCurrAvail;
    }
    /**
     * Set SeatsCurrAvail value
     * @param int $seatsCurrAvail
     * @return \Sabre\UpdateReservation\StructType\BSGCounterHistoryType
     */
    public function setSeatsCurrAvail($seatsCurrAvail = null)
    {
        // validation for constraint: int
        if (!is_null($seatsCurrAvail) && !is_numeric($seatsCurrAvail)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($seatsCurrAvail)), __LINE__);
        }
        $this->SeatsCurrAvail = $seatsCurrAvail;
        return $this;
    }
    /**
     * Get TotalItemCount value
     * @return int|null
     */
    public function getTotalItemCount()
    {
        return $this->TotalItemCount;
    }
    /**
     * Set TotalItemCount value
     * @param int $totalItemCount
     * @return \Sabre\UpdateReservation\StructType\BSGCounterHistoryType
     */
    public function setTotalItemCount($totalItemCount = null)
    {
        // validation for constraint: int
        if (!is_null($totalItemCount) && !is_numeric($totalItemCount)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($totalItemCount)), __LINE__);
        }
        $this->TotalItemCount = $totalItemCount;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\BSGCounterHistoryType
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
