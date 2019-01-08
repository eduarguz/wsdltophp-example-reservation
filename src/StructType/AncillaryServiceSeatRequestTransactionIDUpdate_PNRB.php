<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AncillaryServiceSeatRequestTransactionIDUpdate.PNRB
 * StructType
 * @subpackage Structs
 */
class AncillaryServiceSeatRequestTransactionIDUpdate_PNRB extends AbstractStructBase
{
    /**
     * The SeatRequestTransactionID
     * @var string
     */
    public $SeatRequestTransactionID;
    /**
     * Constructor method for AncillaryServiceSeatRequestTransactionIDUpdate.PNRB
     * @uses AncillaryServiceSeatRequestTransactionIDUpdate_PNRB::setSeatRequestTransactionID()
     * @param string $seatRequestTransactionID
     */
    public function __construct($seatRequestTransactionID = null)
    {
        $this
            ->setSeatRequestTransactionID($seatRequestTransactionID);
    }
    /**
     * Get SeatRequestTransactionID value
     * @return string|null
     */
    public function getSeatRequestTransactionID()
    {
        return $this->SeatRequestTransactionID;
    }
    /**
     * Set SeatRequestTransactionID value
     * @param string $seatRequestTransactionID
     * @return \Sabre\UpdateReservation\StructType\AncillaryServiceSeatRequestTransactionIDUpdate_PNRB
     */
    public function setSeatRequestTransactionID($seatRequestTransactionID = null)
    {
        // validation for constraint: string
        if (!is_null($seatRequestTransactionID) && !is_string($seatRequestTransactionID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($seatRequestTransactionID)), __LINE__);
        }
        $this->SeatRequestTransactionID = $seatRequestTransactionID;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\AncillaryServiceSeatRequestTransactionIDUpdate_PNRB
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
