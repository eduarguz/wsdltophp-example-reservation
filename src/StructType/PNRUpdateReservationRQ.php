<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PNRUpdateReservationRQ StructType
 * @subpackage Structs
 */
class PNRUpdateReservationRQ extends AbstractStructBase
{
    /**
     * The Reservation
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\Reservation_PNRB
     */
    public $Reservation;
    /**
     * The POS
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\POS_Type_PNRB
     */
    public $POS;
    /**
     * The ReservationEmail
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\ReservationEmail_PNRB
     */
    public $ReservationEmail;
    /**
     * The RecordLocator
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $RecordLocator;
    /**
     * Constructor method for PNRUpdateReservationRQ
     * @uses PNRUpdateReservationRQ::setReservation()
     * @uses PNRUpdateReservationRQ::setPOS()
     * @uses PNRUpdateReservationRQ::setReservationEmail()
     * @uses PNRUpdateReservationRQ::setRecordLocator()
     * @param \Sabre\UpdateReservation\StructType\Reservation_PNRB $reservation
     * @param \Sabre\UpdateReservation\StructType\POS_Type_PNRB $pOS
     * @param \Sabre\UpdateReservation\StructType\ReservationEmail_PNRB $reservationEmail
     * @param string $recordLocator
     */
    public function __construct(\Sabre\UpdateReservation\StructType\Reservation_PNRB $reservation = null, \Sabre\UpdateReservation\StructType\POS_Type_PNRB $pOS = null, \Sabre\UpdateReservation\StructType\ReservationEmail_PNRB $reservationEmail = null, $recordLocator = null)
    {
        $this
            ->setReservation($reservation)
            ->setPOS($pOS)
            ->setReservationEmail($reservationEmail)
            ->setRecordLocator($recordLocator);
    }
    /**
     * Get Reservation value
     * @return \Sabre\UpdateReservation\StructType\Reservation_PNRB|null
     */
    public function getReservation()
    {
        return $this->Reservation;
    }
    /**
     * Set Reservation value
     * @param \Sabre\UpdateReservation\StructType\Reservation_PNRB $reservation
     * @return \Sabre\UpdateReservation\StructType\PNRUpdateReservationRQ
     */
    public function setReservation(\Sabre\UpdateReservation\StructType\Reservation_PNRB $reservation = null)
    {
        $this->Reservation = $reservation;
        return $this;
    }
    /**
     * Get POS value
     * @return \Sabre\UpdateReservation\StructType\POS_Type_PNRB|null
     */
    public function getPOS()
    {
        return $this->POS;
    }
    /**
     * Set POS value
     * @param \Sabre\UpdateReservation\StructType\POS_Type_PNRB $pOS
     * @return \Sabre\UpdateReservation\StructType\PNRUpdateReservationRQ
     */
    public function setPOS(\Sabre\UpdateReservation\StructType\POS_Type_PNRB $pOS = null)
    {
        $this->POS = $pOS;
        return $this;
    }
    /**
     * Get ReservationEmail value
     * @return \Sabre\UpdateReservation\StructType\ReservationEmail_PNRB|null
     */
    public function getReservationEmail()
    {
        return $this->ReservationEmail;
    }
    /**
     * Set ReservationEmail value
     * @param \Sabre\UpdateReservation\StructType\ReservationEmail_PNRB $reservationEmail
     * @return \Sabre\UpdateReservation\StructType\PNRUpdateReservationRQ
     */
    public function setReservationEmail(\Sabre\UpdateReservation\StructType\ReservationEmail_PNRB $reservationEmail = null)
    {
        $this->ReservationEmail = $reservationEmail;
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
     * @return \Sabre\UpdateReservation\StructType\PNRUpdateReservationRQ
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
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\PNRUpdateReservationRQ
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
